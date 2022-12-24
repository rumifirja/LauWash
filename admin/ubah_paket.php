<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Paket</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-ubah-user.css">
</head>
<body>
    <!-- Login -->
    <div class="container">
        <div class="login">
            <div class="login-logo">
                <h2>EDIT PAKET</h2>
            </div>
            <?php 
            include "../koneksi.php";
            $qry_get_paket = mysqli_query($conn, "select * from paket where id_paket = '" . $_GET['id'] . "'");
            $dt_paket = mysqli_fetch_array($qry_get_paket);
            ?>
            <div class="box">
                <form action="proses_ubah_paket.php" method="post">
                    <input type="hidden" id="id_paket" name="id_paket" value="<?= $dt_paket['id_paket'] ?>">
                    <input type="text" id="name" name="jenis" value="<?= $dt_paket['jenis'] ?>" class="input-control">
                    <input type="text" id="price" name="harga" value="<?= $dt_paket['harga'] ?>" class="input-control">
                    <input type="submit" id="login" value="Edit" class="btn">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>