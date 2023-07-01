<?php
    // memanggil database
    include("config.php");

    // memanggil id
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // menghapus id dari database coment
        $sql = "DELETE FROM coment WHERE id=$id";
        $query = mysqli_query($db, $sql);

        // jika berhasil akan langsung dialihkan ke blog-details-2023-1.php
        if($query) {
            header('Location: blog-details-2023-1.php');

        // jika gagal menghapus akan muncul peringatan    
        } else {
            die("gagal Menghapus...");
        } 

        // Jika tidak bisa mengakses id, maka akan muncul peringatan akses dilarang
    } else {
        die("akses dilarang");
    }
