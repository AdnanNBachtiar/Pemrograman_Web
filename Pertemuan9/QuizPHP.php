<?php

    $NIP = $_POST["nip"];
    $Nama = $_POST["nama"];
    $Gaji = $_POST["gaji"];
    $Bonus = $_POST["bonus"];
    $Tunjangan = 5/100 * $Gaji;
    $Pajak = 10/100 * $Gaji;
    $Gaji1 = $Gaji + $Bonus + $Tunjangan - $Pajak ;

    echo "================================ <br>";
    echo "NIP = $NIP <br>";
    echo "Nama Pegawai = $Nama <br>";
    echo "================================ <br>";
    echo "Gaji Pokok = Rp. $Gaji <br>";
    echo "Bonus = Rp. $Bonus <br>";
    echo "Tunjangan = Rp. $Tunjangan <br>";
    echo "Pajak = Rp. $Pajak <br> ";
    echo "================================ <br>";
    echo "Gaji yang harus dibayarkan = Rp. $Gaji1 <br>";
?>