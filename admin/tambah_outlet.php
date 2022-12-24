<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Outlet</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-ubah-user.css">
</head>
<body>
    <!-- Login -->
    <div class="container">
        <div class="login">
            <div class="login-logo">
                <h2>TAMBAH OUTLET</h2>
            </div>
            <div class="login-form">
                <form action="proses_tambah_outlet.php" method="post">
                    <input type="text" id="name" name="nama" placeholder="Name" class="input-control"><br>

                    <input type="text" id="address" name="alamat" placeholder="Address" class="input-control"><br>

                    <input type="text" id="telp" name="tlp" placeholder="No. Telepon" class="input-control"><br>

                    <select id="gender" name="owner" class="input-control">
                        <option>Pilih Owner</option>
                        <?php
                        include "../koneksi.php";
                        $qry_user = mysqli_query($conn, "select * from user where role = 'owner'");
                        while ($data_user = mysqli_fetch_array($qry_user)) {
                            echo '<option value="' . $data_user['id'] . '">' . $data_user['nama'] . '</option>';
                        }
                        ?>
                    </select>

                    <input type="submit" id="login" value="Tambah" class="btn">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>