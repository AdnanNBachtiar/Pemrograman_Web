<html>
<head>
    <title>Tutorial cara membuat Logib dengan PHP MySQLi</title>
</head>
<body>
    <h3> form Login - Tutorial Login dengan PHP MySQLi</h3>
    <!-- notifikasi -->
<?php

if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login gagal! username dan password salah!";
    }
    else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
    }
    else if($_GET['pesan'] == "Belum Login"){
        echo "Anda harus login untuk mengakses halaman admin";
}}
?>

<br>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>

</body>
</html>