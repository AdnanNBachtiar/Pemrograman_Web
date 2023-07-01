<?php
    // mengakses database
    include('config.php');

    // memanggil database coment
    if(isset($_POST['coment'])){

        // mengambil data name
        $name = $_POST['name'];
        // memanggil data email
        $email = $_POST['email'];
        // memanggil data message
        $message   = $_POST['message'];

        // memasukan Komentar kedalam database coment
        $sql = "INSERT INTO coment (name, email, message ) VALUE ('$name', '$email', '$message')";
        $query = mysqli_query($db, $sql);

    // jika berhasil akan langsung dialihkan ke blog-details-2023-1.php, dengan status SUKSES
    if($query){
        header('Location: blog-details-2023-1.php?status=sukses');
        
    // jika Gagal akan langsung dialihkan ke blog-details-2023-1.php, dengan status GAGAL
    } else {
    header('Location: blog-details-2023-1.php?status=gagal');
}
// jika tidak dapat mengakses database, maka akan muncul akses ditolak
} else {
    die("akses Ditolak");
}
?>