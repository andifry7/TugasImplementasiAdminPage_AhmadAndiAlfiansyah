<?php

require "../session_check.php";
require "../../config/koneksi.php";
include "../partials/header.php";

if (isset($_POST['simpan'])) {
    $name = htmlspecialchars($_POST['name']);
    $position = htmlspecialchars($_POST['position']);
    $description = htmlspecialchars($_POST['description']);

    $image = $_FILES['image'];

    $nama = $image['name'];
    $tmp = $image['tmp_name'];
    $size = $image['size'];

    $ekstensiValid = ['jpg', 'jpeg', 'png', 'webp'];

    $ekstensi = strtolower(pathinfo($nama, PATHINFO_EXTENSION));

    if (!in_array($ekstensi, $ekstensiValid)) {

    echo "
    <script>
        alert('Format gambar harus JPG, JPEG, PNG, atau WEBP!');
        history.back();
    </script>
    ";
    exit;
    }

    if ($size > 2 * 1024 * 1024) {
        echo "
        <script>
            alert('Ukuran gambar maksimal 2 MB!');
            history.back();
        </script>
        ";
        exit;
    }

    $namaBaru = uniqid("team_", true) . "." . $ekstensi;
    if (move_uploaded_file($tmp, "upload/" . $namaBaru)) {

    mysqli_query($koneksi, "
        INSERT INTO team
        (name, position, image)
        VALUES
        (
            '$name',
            '$position',
            '$namaBaru'
        )
    ");

    header("Location: index.php");
    exit;
    
    } else {
        echo "
        <script>
            alert('Upload gambar gagal!');
            history.back();
        </script>
        ";
        exit;
    }
}

?>

<div class="admin-wrapper">
    <?php include "../partials/sidebar.php"; ?>
    <div class="main-content">
        <?php include "../partials/topbar.php"; ?>
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2>Add Team Member</h2>
                    <p class="text-secondary">
                        Add a new team member to your website.
                    </p>
                </div>
                <a href="index.php" class="btn btn-outline-light">
                    <i class="bi bi-arrow-left"></i>
                    Back
                </a>
            </div>
            <div class="activity-card">
                <form method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="form-label">
                        Name
                    </label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        required>
                </div>
                <div class="mb-4">
                    <label class="form-label">
                        Position
                    </label>
                    <input
                        type="text"
                        name="position"
                        class="form-control"
                        placeholder="Frontend Developer"
                        required>
                </div>
                <div class="mb-4">
                    <label class="form-label">
                        Photo
                    </label>
                    <input
                        type="file"
                        id="image"
                        name="image"
                        class="form-control"
                        accept=".jpg,.jpeg,.png,.webp"
                        required>
                    <div class="mt-3">
                        <img
                            id="preview"
                            src="../assets/img/no-image.png"
                            width="220"
                            class="rounded shadow">
                    </div>
                </div>
                <button
                    type="submit"
                    name="simpan"
                    class="btn btn-primary">
                    <i class="bi bi-check-circle"></i>
                    Save Team
                </button>
            </form>
            </div>
        </div>
    </div>
</div>

<?php include "../partials/footer.php"; ?>