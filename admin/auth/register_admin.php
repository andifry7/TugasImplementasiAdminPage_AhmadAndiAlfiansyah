<?php
require "../../config/koneksi.php";

if (isset($_POST['register'])) {

    $nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama']));
    $username = trim(mysqli_real_escape_string($koneksi, $_POST['username']));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek username
    $cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");

    if (mysqli_num_rows($cek) > 0) {
        echo "<script>
            alert('Username sudah digunakan!');
        </script>";
    } else {

        mysqli_query($koneksi, "
            INSERT INTO admin(nama, username, password)
            VALUES('$nama','$username','$password')
        ");

        echo "<script>
            alert('Admin berhasil dibuat');
            window.location='../../login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container py-5">
        <div class="card mx-auto" style="max-width:500px">
            <div class="card-body">
            <h3 class="mb-4 text-center">
            Register Admin
            </h3>
            <form method="POST">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-4">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-primary w-100" name="register">
            Buat Admin
            </button>
            </form>
        </div>
    </div>
</div>

</body>
</html>