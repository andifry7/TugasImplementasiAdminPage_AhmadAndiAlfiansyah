<?php

require "../session_check.php";
require "../../config/koneksi.php";
include "../partials/header.php";

$id = (int) $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['update'])) {
    $title       = htmlspecialchars($_POST['title']);
    $category    = htmlspecialchars($_POST['category']);
    $description = htmlspecialchars($_POST['description']);

    $imageLama = $data['image'];
    $namaBaru  = $imageLama;

    if ($_FILES['image']['error'] === 0) {

        $nama = $_FILES['image']['name'];
        $tmp  = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];

        $ekstensiValid = ['jpg', 'jpeg', 'png', 'webp'];
        $ekstensi = strtolower(pathinfo($nama, PATHINFO_EXTENSION));

        if (!in_array($ekstensi, $ekstensiValid)) {
            echo "
            <script>
                alert('Format gambar harus JPG, JPEG, PNG atau WEBP!');
                history.back();
            </script>";
            exit;
        }

        if ($size > 2 * 1024 * 1024) {
            echo "
            <script>
                alert('Ukuran gambar maksimal 2 MB!');
                history.back();
            </script>";
            exit;
        }

        $namaBaru = uniqid("portfolio_", true) . "." . $ekstensi;

        move_uploaded_file($tmp, "upload/" . $namaBaru);

        if (
            !empty($imageLama) &&
            file_exists("upload/" . $imageLama)
        ) {
            unlink("upload/" . $imageLama);
        }
    }

    mysqli_query($koneksi, "
        UPDATE portfolio SET
            title       = '$title',
            category    = '$category',
            description = '$description',
            image       = '$namaBaru'
        WHERE id = '$id'
    ");

    header("Location: index.php");
    exit;
}

?>

<div class="admin-wrapper">
    <?php include "../partials/sidebar.php"; ?>
    <div class="main-content">
        <?php include "../partials/topbar.php"; ?>
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2>Edit Portfolio</h2>
                    <p class="text-secondary">
                        Update portfolio information.
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
                            Title
                        </label>
                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            value="<?= htmlspecialchars($data['title']) ?>"
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
                            <option value="web"
                                <?= ($data['category'] == "web") ? "selected" : "" ?>>
                                Web Design
                            </option>
                            <option value="branding"
                                <?= ($data['category'] == "branding") ? "selected" : "" ?>>
                                Branding
                            </option>
                            <option value="development"
                                <?= ($data['category'] == "development") ? "selected" : "" ?>>
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
                            required><?= htmlspecialchars($data['description']) ?></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">
                            Current Image
                        </label>
                        <br>
                        <img
                            src="upload/<?= $data['image']; ?>"
                            id="preview"
                            width="220"
                            class="rounded shadow mb-3">
                        <input
                            type="file"
                            id="image"
                            name="image"
                            class="form-control"
                            accept=".jpg,.jpeg,.png,.webp">
                        <small class="text-secondary">
                            Leave this field empty if you don't want to change the image.
                        </small>
                    </div>
                    <button
                        type="submit"
                        name="update"
                        class="btn btn-primary">
                        <i class="bi bi-check-circle"></i>
                        Update Portfolio
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "../partials/footer.php"; ?>