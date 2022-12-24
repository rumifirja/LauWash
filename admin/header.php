<?php
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
    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-home-admin3.css">
</head>

<body>
    <?php
    include '../koneksi.php';
    $query = mysqli_query($conn, "SELECT * FROM user WHERE id = '" . $_SESSION['id'] . "'");
    $u = mysqli_fetch_object($query);
    ?>
    <!-- Jumbotron -->
    <div class="container">
        <section class="jumbotron">
            <div class="caption">
                <h3>Profil User</h3>
                <div class="box">
                    <form action="" method="POST">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" require placeholder="Masukan nama user" class="input-control" value="<?php echo $u->nama ?>">

                        <label for="username">Username</label>
                        <input type="text" name="username" require placeholder="Masukan username" class="input-control" value="<?php echo $u->username ?>">

                        <label for="role">Peran</label>
                        <input type="text" class="input-control" value="<?php echo $u->role ?>" readonly></input>

                        <input type="submit" name="submit" value="Ubah Profil" class="btn">
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $nama = ucwords($_POST['nama']);
                        $username = ucwords($_POST['username']);
                        $role = ucwords($_POST['role']);

                        $update = mysqli_query($conn, "UPDATE user SET 
                                                nama = '" . $nama . "',
                                                username = '" . $username . "',
                                                role = '" . $role . "'
                                                WHERE id = '" . $u->id . "'");
                        if ($update) {
                            echo '<script>alert("Edit user berhasil")</script>';
                            echo '<script>window.location="home.php"</script>';
                        } else {
                            echo 'gagal' . mysqli_error($conn);
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>

</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>

</html>