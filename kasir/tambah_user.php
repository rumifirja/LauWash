<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-ubah-user.css">
</head>
<body>
    <!-- Login -->
    <div class="container">
        <div class="login">
            <div class="login-logo">
                <h2>TAMBAH USER</h2>
            </div>
            <div class="box">
                <form action="proses_tambah_user.php" method="post">
                    <input type="text" id="name" name="nama_member" placeholder="Name" class="input-control"><br>

                    <input type="text" id="address" name="alamat" placeholder="Address" class="input-control"><br>

                    <select name="jenis_kelamin" id="gender" class="input-control">
                        <option value="">Pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <input type="text" id="telp" name="tlp" placeholder="No. Telepon" class="input-control"><br>
                    
                    <input type="submit" id="login" value="Register" class="btn">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>