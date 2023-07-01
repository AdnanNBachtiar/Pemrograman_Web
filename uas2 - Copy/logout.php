<?php
    // memulai sesion, kemudian mengdestroy semua sesion, dan kembali lagi ke login.php
    session_start();
    session_destroy();
    header('location:login.php');
?>