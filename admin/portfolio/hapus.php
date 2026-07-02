<?php

require "../session_check.php";
require "../../config/koneksi.php";

$id = (int) $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT image FROM portfolio WHERE id = '$id'"
);

$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: index.php");
    exit;
}

if (
    !empty($data['image']) &&
    file_exists("upload/" . $data['image'])
) {
    unlink("upload/" . $data['image']);
}

mysqli_query(
    $koneksi,
    "DELETE FROM portfolio WHERE id = '$id'"
);

header("Location: index.php");
exit;