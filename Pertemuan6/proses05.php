<?php
if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "Adnan" && $pass == "1234"){
        echo "<h2> Login Berhasil </h2>";
    }
    else {
        echo "<h2> Login Gagal </h2>";
    }
}
?>