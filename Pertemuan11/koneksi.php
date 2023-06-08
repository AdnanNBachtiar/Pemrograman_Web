<?php

    // isi nama host, user name mysql, dan pasword mysql anda
    $host = mysql_connect("localhost", "root", "xxx");

    if($host){
        echo "koneksi host berhasil, <br>";
    } else {
        echo "koneksi host tidak berhasil <br>";
    }

    // isikan dengan nama database yang akan di hubungkan
    $db = mysql_select_db("konekdb");

    if($db) {
        echo "koneksi Berhasil ke konekdb <br>";
    } else{
        echo "koneksi gagal kedalam konekdb <br>";
    }
?>