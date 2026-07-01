<?php

session_start();

require "../../config/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim(mysqli_real_escape_string($koneksi, $_POST['username']));
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");

    if (mysqli_num_rows($query) == 1) {
        $admin = mysqli_fetch_assoc($query);
        if (password_verify($password, $admin['password'])) {

        $_SESSION['login'] = true;
        $_SESSION['id_admin'] = $admin['id'];
        $_SESSION['nama'] = $admin['nama'];
        $_SESSION['username'] = $admin['username'];

        echo "
        <script>
            alert('Login berhasil!');
            window.location='../../index.php';
        </script>";

        } else {
            echo "
            <script>
                alert('Password salah!');
                history.back();
            </script>";
        }
    } else {
        echo "
        <script>
            alert('Username tidak ditemukan!');
            history.back();
        </script>";
    }
}