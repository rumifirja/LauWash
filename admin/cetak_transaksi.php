<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Cetak</title>
</head>

<body>
  <style type="text/css">
    table {
      margin: 0 auto;
      border-collapse: collapse;
      width: 700px;
    }

    table th,
    table td {
      border: 1px solid #3c3c3c;
      padding: 3px 8px;

    }

    h2 {
      margin: 0 0px;
      padding-top: 20px;
    }

    h3,
    .header {
      margin: 0 0px;
      padding-top: 10px;
    }

    img {
      width: 110px;
      position: absolute;
    }

    table {
      text-align: left;
    }

    p {
      line-height: 20px;
    }

    .date {
      position: absolute;
      right: 0;
    }

    .tengah {
      text-align: center;
    }

    .biodata {
      margin: 0 250px;
      width: 450px;

    }

    .biodata p {
      line-height: 20px;
    }
  </style>
  <h2 class="align-center">TRANSAKSI LAUNDRY</h2>
  <h3>LauWash</h3>
  <p class="header">Email: lauwashlau@gmail.com</p>
  <br>
  <hr style="width:100%" , size="3" , color=black>
  <hr>

  <h4>Customers :</h4>
  <table>
    <?php
    include "../koneksi.php";
    $sql = 'SELECT t.id_transaksi, m.nama as nama_member, t.tgl, t.batas_waktu, t.tgl_bayar, m.tlp, t.status, t.dibayar, o.nama as nama_outlet, m.alamat, m.jenis_kelamin, u.nama as nama_user FROM transaksi t JOIN member m ON t.id_member=m.id_member JOIN outlet o ON o.id_outlet = t.id_outlet JOIN user u ON u.id = t.id_user where t.id_transaksi = ' .$_GET ['id_transaksi'];
    $result = mysqli_query($conn, $sql);
    ?>
    <?php while ($cetak_transaksi = mysqli_fetch_assoc($result)) { ?>

      <tbody>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">No Transaksi</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['id_transaksi'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Nama Lengkap</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['nama_member'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Alamat</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['alamat'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Jenis Kelamin</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['jenis_kelamin'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Telepon</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['tlp'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Nama Outlet</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['nama_outlet'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Nama Petugas</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['nama_user'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Status Pembayaran</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['dibayar'] ?></td>

        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Status Order</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['status'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Tanggal Diambil</td>
          <td class="fw-bold fs-6"><?= $cetak_transaksi['batas_waktu'] ?></td>
        </tr>

      <?php
    }
      ?>
      </tbody>
  </table>

  <br><br>
  <div class="date">
    <?php
    echo date('l, d-m-Y');
    ?><br>
  </div>
  <br><br>

  <table class="table table-hover table-striped">
    <tr>
      <th>No</th>
      <th>Tanggal Order</th>
      <th>Tanggal Bayar</th>
      <th>Paket Laundry</th>
      <th>Berat Cucian</th>
      <th>Harga/Kg</th>
      <th>Subtotal</th>
    </tr>
    <tbody>

      <?php
      include "../koneksi.php";
      $qry_pembayaran = mysqli_query($conn, 'SELECT t.id_transaksi, m.nama, t.tgl, t.batas_waktu, t.tgl_bayar, m.tlp, t.status, t.dibayar, p.harga, d.qty, p.jenis, d.subtotal FROM transaksi t JOIN detail_transaksi d ON t.id_transaksi=d.id_transaksi JOIN member m ON t.id_member=m.id_member JOIN paket p ON p.id_paket = d.id_paket where t.id_transaksi = ' .$_GET ['id_transaksi']);
      $no = 0;
      $total = 0;
      while ($data_pembayaran = mysqli_fetch_array($qry_pembayaran)) {
        $harga = $data_pembayaran['harga'];
        $qty = $data_pembayaran['qty'];
        $subtotal = $harga * $qty;
        $total += $data_pembayaran['subtotal'];
        $no++; ?>

        <tr class="text-xs font-weight-bold">
          <td class="align-middle text-left"><?= $no ?></td>
          <td class="align-middle text-left"><?= $data_pembayaran['tgl'] ?></td>
          <td class="align-middle text-left"><?= $data_pembayaran['tgl_bayar'] ?></td>
          <td class="align-middle text-left"><?= $data_pembayaran['jenis'] ?></td>
          <td class="align-middle text-left"><?= $data_pembayaran['qty'] ?>kg</td>
          <td class="align-middle text-left">Rp.<?= $data_pembayaran['harga'] ?></td>
          <td class="align-middle text-left">Rp.<?= $subtotal ?></td>
        </tr>
        
      <?php
      }
      ?>
    </tbody>
      <td class="align-middle text-left" style="text-align: right;" colspan = "7">Total = Rp.<?= $total ?></td>
  </table><br><br>

  <script>
    window.print();
  </script>
</body>

</html>