<?php

    // create database connection using config file
    include_once("config.php");

    // Fetch all users data from database
    $result = mysqli_query($mysqli, "select * from users order by id desc");

?>

<html>
    <head>
        <title> Homepage </title>
    </head>
    <style>
        /* Gaya tampilan modal */
        .modal {
            display: none; /* Modal default tersembunyi */
            position: fixed; /* Mengatur posisi tetap */
            z-index: 1; /* Menetapkan indeks z tinggi */
            left: 0;
            top: 0;
            width: 100%; /* Lebar modal mengisi seluruh layar */
            height: 100%; /* Tinggi modal mengisi seluruh layar */
            overflow: auto; /* Mengaktifkan scrolling jika konten terlalu panjang */
            background-color: rgba(0,0,0,0.4); /* Latar belakang semi-transparan */
        }

        /* Gaya tampilan konten modal */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* Tengah secara vertical dan horizontal */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Lebar konten modal */
        }

        /* Gaya tampilan tombol close */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Gaya tampilan tabel */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Gaya tampilan tombol add dan delete */
        .add-btn,
        .delete-btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 2px 2px;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        .delete-btn {
            background-color: #f44336;
        }

        /* Animasi tabel */
        @keyframes tableAnimation {
            0% {
                transform: rotate(0deg);
            }
            50% {
                transform: rotate(5deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }
    </style>
    <body>
        

        <table width='80%' border="1">
            <tr>
                <th> Name </th>
                <th> Mobile</th>
                <th> Email</th>
                <th> Update</th>
            </tr>

            
            <?php

            while($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>". $user_data['name']."</td>";
                echo "<td>". $user_data['mobile']."</td>";
                echo "<td>". $user_data['email']."</td>";
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
            }
            ?>
        </table> <br><br>

 <!-- Tombol untuk membuka modal -->
 <button onclick="openModal()">Add New User</button>

<!-- Modal -->
<div id="myModal" class="modal">
    <!-- Konten modal -->
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Tambahkan User</h2>
        <p>

<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
    <tr>
        <td> Name</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td> Email</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td> Mobile</td>
        <td><input type="text" name="mobile"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="value"></td>
    </tr>
    </table>
</form>

</p>
    </div>
</div>

<script>
    // Fungsi untuk membuka modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>


    </body>
</html>