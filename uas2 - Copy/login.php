<?php

require 'function.php';

// cek login terdaftar atau tidak
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    // mencocokan dengan data base apakah ada atau tidak
    $query = "SELECT * from login where user='$user' and password='$password'";

    // echo $query;exit;

    $cekdatabase = mysqli_query($conn, $query);

    // menghitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);
    if ($hitung > 0) {
        $_SESSION['log'] = 'true';
        header('location:index.php');
    } else {
        header('location:login.php');
    }
}

// mengecek jika sudah login direderect ke index.php
if (!isset($_SESSION['log'])) {
} else {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="assets/css/main.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-floating mb-3">
                                        <label for="user">Username</label>
                                            <input class="form-control" name="user" id="user" type="text" placeholder="Username" />
                                        </div>

                                        <div class="form-floating mb-3">
                                        <label for="inputPassword">Password</label>
                                            <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                        </div>
                                        
                                        <div class="d-flex align-items-center justify-content-between mt-6 mb-0">
                                            <button class="btn btn-primary" name="login">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>