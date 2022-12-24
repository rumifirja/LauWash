<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-user2.css">
</head>

<body>
    <!-- CRUD Jenis Paket -->
    <div class="container">
        <div class="report">
            <div class="report-wrapper">
                <div class="report-card">
                    <div class="report-desc">
                        <h3>Paket</h3>
                    </div>
                    <div class="r">

                        <form method=post action="tampil_paket.php">
                            <label for="cari" class="cari">Search :</label>
                            <input type="search" id="gsearch" name="cari" class="input-control">
                            <input type="submit" value="Cari" class="btn">
                        </form>

                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jenis Paket</th>
                                    <th>Harga</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include "../koneksi.php";
                                if (isset($_POST['cari'])) {
                                    $cari = $_POST['cari'];
                                    $qry_paket = mysqli_query($conn, "select * from paket where id_paket = '$cari' or jenis like '%$cari%' or harga like '%$cari%'");
                                } else {
                                    $qry_paket = mysqli_query($conn, "SELECT p.id_paket, p.jenis, p.harga FROM paket p");
                                }
                                $no = 0;
                                while ($data_paket = mysqli_fetch_array($qry_paket)) {
                                    $no++;
                                    $hapus = "<a href='hapus_paket.php?id=$data_paket[id_paket]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' style='color:red'>Hapus</a>";
                                    $edit = "<a href='ubah_paket.php?id=$data_paket[id_paket]'>Edit</a>";
                                    $transaksi = "<a href='ubah_paket.php?id=$data_paket[id_paket]' style='color:green'>Transaksi</a>";
                                ?>
                                    <tr>
                                        <td><?= $data_paket['id_paket'] ?></td>
                                        <td><?= $data_paket['jenis'] ?></td>
                                        <td><?= $data_paket['harga'] ?></td>
                                        <td><?= $edit ?></td>
                                        <td><?= $hapus ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="register">
                        <a href="tambah_paket.php"><button>Tambah Paket</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>

</html>