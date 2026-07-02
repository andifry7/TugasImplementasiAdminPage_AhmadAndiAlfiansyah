<?php

require "../session_check.php";
require "../../config/koneksi.php";
include "../partials/header.php";

if (isset($_POST['simpan'])) {
    $title = htmlspecialchars($_POST['title']);
    $category = htmlspecialchars($_POST['category']);
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

    $namaBaru = uniqid("portfolio_", true) . "." . $ekstensi;
    if (move_uploaded_file($tmp, "upload/" . $namaBaru)) {

    mysqli_query($koneksi, "
        INSERT INTO portfolio
        (title, category, description, image)
        VALUES
        (
            '$title',
            '$category',
            '$description',
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
                    <h2>Add Portfolio</h2>
                    <p class="text-secondary">
                        Add a new project to your website.
                    </p>
                </div>
                <a href="index.php" class="btn btn-outline-light">
                    <i class="bi bi-arrow-left"></i>
                    Back
                </a>
            </div>
            <div class="activity-card">
                <form method="POST"
                    enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="form-label">
                            Title
                        </label>
                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">
                            Category
                        </label>
                        <select
                            name="category"
                            class="form-select"
                            required>
                            <option value="">Choose Category</option>
                            <option value="web">
                                Web Design
                            </option>
                            <option value="branding">
                                Branding
                            </option>
                            <option value="development">
                                Development
                            </option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">
                            Description
                        </label>
                        <textarea
                            name="description"
                            rows="5"
                            class="form-control"
                            required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">
                            Image
                        </label>
                        <input
                            type="file"
                            name="image"
                            class="form-control"
                            accept="image/*"
                            required>
                        <div class="mt-3">
                            <img id="preview"
                                src="../assets/img/no-image.png"
                                width="220"
                                class="rounded shadow"
                                style="display:block;">
                        </div>
                    </div>
                    <button
                        class="btn btn-primary"
                        name="simpan">
                        <i class="bi bi-check-circle"></i>
                        Save Portfolio
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "../partials/footer.php"; ?>