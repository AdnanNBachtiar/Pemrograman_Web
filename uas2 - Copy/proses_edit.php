<?php

    // mengakses database
    include('config.php');

    // memanggil database coment
    if(isset($_POST['coment'])){

        // mengambil data id
        $id = $_POST['id'];
        // mengambil data name
        $name = $_POST['name'];
        // mengambil data email
        $email = $_POST['email'];
        // mengambil data message
        $message = $_POST['message'];

        // memasukan hasil update kedalam database yang sudah ada
        $sql = "UPDATE coment SET name='$name', email='$email', message='$message' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        // jika berhasil akan langsung dialihkan ke blog-details-2023-1.php
        if($query) {
            header ('Location: blog-details-2023-1.php');

        // jika Gagal akan langsung muncul keterangan
        }else{
            die("Gagal menyimpan UPDATE");
        }
        
    // jika tidak dapat mengakses database, maka akan muncul akses ditolak
    } else {
        die("akses dilarang");
    }

?>