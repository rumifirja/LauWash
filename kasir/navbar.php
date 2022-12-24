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
    <link rel="stylesheet" href="../assets/css/style-navbar-kasir.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Lau<span>Wash</span></h1>
            <ul>

                <li><a href="home.php">Profil</a></li>
                <!-- <a href="tambah_transaksi.php"><i class="fa-regular fa-plus"></i></a> -->
                <li><a href="tampil_member.php">Member</a></li>
                <li><a href="histori_transaksi.php">Histori transaksi</a></li>
                <li><a href="logout.php">LogOut</a></li>

            </ul>
        </div>
    </header>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>

</html>