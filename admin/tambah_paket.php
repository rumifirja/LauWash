<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-ubah-user.css">
</head>
<body>
    <!-- Login -->
    <div class="container">
        <div class="login">
            <div class="login-logo">
                <h2>TAMBAH PAKET</h2>
            </div>
            <div class="box">
                <form action="proses_tambah_paket.php" method="post">
                <input type="text" id="name" name="jenis" placeholder="Jenis" class="input-control"><br>
                <input type="text" id="price" name="harga" placeholder="Harga" class="input-control"><br>
                <input type="submit" id="login" value="Tambah" class="btn">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>