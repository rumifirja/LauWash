<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-navbar-admin4.css">
</head>

<body>
    <header>
        <div class="container">


            <h1 class="ket">Lau<span>Wash</span></h1>
            <ul>

                <li><a href="home.php">Profil</a></li>
                <li><a href="tampil_member.php">Member</a></li>
                <li><a href="tampil_user.php">Kasir</a></li>
                <li><a href="tampil_owner.php">Owner</a></li>
                <!-- <a href="tambah_transaksi.php"><i class="fa-regular fa-plus"></i></a> -->
                <li><a href="tampil_paket.php">Paket</a></li>
                <li><a href="tampil_outlet.php">Outlet</a></li>
                <li><a href="histori_transaksi.php">Histori</a></li>
                <li><a href="logout.php">LogOut</a></li>

            </ul>


        </div>
    </header>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>

</html>