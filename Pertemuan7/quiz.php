<?php
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $coment = $_POST['coment'];
    $gender = $_POST['gender'];
    
    echo "<h1> Your Input : </h1>";
    echo $nama. "<br>";
    echo $email. "<br>";
    echo $website. "<br>";
    echo $coment. "<br>";
    echo $gender. "<br>";
}