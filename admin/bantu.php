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
      <table class="table table-border" rules="all" border="1">
      <tr align="center">
      <th>
        <a class="table" href="index.php">Beranda</a>
      </th>
      <th>
        <a class="table" href="transaksi.php">Transaksi</a>
      </th>
      <th>
        <a class="table" href="simpan.php">Penyimpanan</a>
      </th>
      <th>
        <button style="background-color: #F0F8FF; border: none; width: 100%;"><a class="table" href="bantu.php">Bantuan</a></button>
      </th>
      </tr>
      </table>
    <div class="container">
       <center> <h5>Informasi Tentang Aplikasi</h5><br>
        <p font-family="times new roman">Cuby Kids adalah konveksi yang menjual berbagai macam koleksi pakaian
sehari-hari anak kecil di Kota Bandung. Konveksi ini didirikan pada tahun 2019 dengan nama Cuby Kids.
Terletak di Kota Bandung tepatnya di Jl. Cigondewah Kidul, Kota Bandung.</p>
<br>
<h6> Facebook: Cuby Kids Cigondewah Bandung</h6></center>
</div>
            </div>
<br>
<div class="container">
    <table class="table table-border">
      <tr>
      <th>
        <center><button style="background-color: khaki; border: none; border-radius: 15px; padding: 5px 10px;">
        <a href="logout.php" class="table">LOGOUT</a></button></center></th></tr></table></div>
</body>
</html>