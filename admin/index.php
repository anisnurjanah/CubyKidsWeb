<?php
session_start();
include '../koneksi.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tab Icon -->
    <link rel="icon" href="../asset/gambar/logo1.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.0-web/css/all.min.css">

    <title>CUBYKIDS STORE</title>
</head>
<body>
  <br>
<div class="container">
        <div class="card">
      <table class="table table-border">
      <tr align="center">
      <th>
        <button style="background-color: #F0F8FF; border: none; width: 100%;"> <a class="table" href="index.php">Beranda</a></button>
      </th>
      <th>
        <a class="table" href="transaksi.php">Transaksi</a>
      </th>
      <th>
        <a class="table" href="simpan.php">Penyimpanan</a>
      </th>
      <th>
        <a class="table" href="bantu.php">Bantuan</a>
      </th>
      </tr>
      </table>
    <div class="container">
        <h5>Stok Barang Jadi</h5>
        <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr align="center">
                    <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Bahan</th>
                <th>Ukuran</th>
                <th>Harga Ecer</th>
                <th>Warna</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>

                       <?php
                         $halaman = 10; /* page halaman*/
                         $page =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                         $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0;
        
                         $result =mysqli_query($conn, "SELECT * FROM barang WHERE ket='Tersedia'");
                         $total = mysqli_num_rows($result);
                         $pages = ceil($total/$halaman);

                         $query = mysqli_query($conn,"SELECT * FROM barang WHERE ket='Tersedia' LIMIT $mulai, $halaman");
                         $no =$mulai+1;
                         while ($data = mysqli_fetch_assoc($query))
                         {
                      ?>
                    <tr align="center">
                    <td><?=$no ++ ?></td>
                    <td><?=$data['nama'] ?></td>
                    <td><?=$data['jenis'] ?></td>
                    <td><?=$data['bahan'] ?></td>
                    <td><?=$data['ukuran'] ?></td>
                    <td>Rp. <?=number_format($data['harga'])?>.00</td>
                    <td><?=$data['warna'] ?></td>
                    <td><?php echo date('d M Y', strtotime($data['tgl'])) ?></td>
                    <td><?=$data['jml'] ?> pcs</td>
                    <td><?=$data['ket'] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
            </table>
            </div>
        </div>
        <br>
        <div class="container">
        <h5>Daftar Pesanan Masuk</h5>
        <div class="card">
            <table class="table table-striped">
            <thead>
              <tr align="center">
                <th>No</th>
                <th>Kode</th>
                <th>Nama Pembeli</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Warna</th>
                <th>Tanggal Pesanan Masuk</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>

                       <?php
                         $halaman = 10; /* page halaman*/
                         $page =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                         $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0;
        
                         $result =mysqli_query($conn, "SELECT * FROM transaksi WHERE ket='Order'");
                         $total = mysqli_num_rows($result);
                         $pages = ceil($total/$halaman);

                         $query = mysqli_query($conn,"SELECT * FROM transaksi WHERE ket='Order' LIMIT $mulai, $halaman");
                         $no =$mulai+1;
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                          $total= $data['harga'] * $data['jml'];
                      ?>
              <tr align="center">
                <td><?=$no ++ ?></td>
                <td><?=$data['kode'] ?></td>
                <td><?=$data['nm_pembeli'] ?></td>
                <td><?=$data['nm_brng'] ?></td>
                <td><?=$data['jml'] ?> pcs</td>
                <td><?=$data['ukuran'] ?></td>
                <td>Rp. <?=number_format($data['harga'])?>.00</td>
                <td>Rp. <?=number_format($total)?>.00</td>
                <td><?=$data['warna'] ?></td>
                <td><?php echo date('d M Y', strtotime($data['tgl'])) ?></td>
                <td><?=$data['ket'] ?></td>
              </tr>
            </tbody>
          <?php } ?>
          </table>
            </div>
        </div>
          <br>
    </div>
    <br>
    <div class="container">
    <table class="table table-border">
      <tr>
      <th>
        <center><button style="background-color: khaki; border: none; border-radius: 15px; padding: 5px 10px;">
        <a href="logout.php" class="table">LOGOUT</a></button></center></th></tr></table></div></body>
</html>