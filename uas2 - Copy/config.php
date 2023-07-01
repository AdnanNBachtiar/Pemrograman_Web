<?php
    $host = 'localhost';  // Ganti dengan nama host database Anda
    $username = 'name';  // Ganti dengan nama pengguna database Anda
    $password = '';  // Ganti dengan kata sandi database Anda
    $database = 'tugasuas';  // Ganti dengan nama database Anda

    // Membuat koneksi ke database
    $db = mysqli_connect($host, $username, $password, $database);

    // Memeriksa koneksi
    if (!$db) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }
?>

