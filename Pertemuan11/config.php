<?php

// using mysql_connect for database connection

$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// mengecek koneksi
if (!$mysqli){
    die("koneksi gagal :" .mysqli_connect_error());
}
echo "Yeay koneksi kamu berhasil";
mysqli_close($mysqli);

?>