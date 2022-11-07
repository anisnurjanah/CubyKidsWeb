<?php
//include('dbconnected.php');
include('../koneksi.php');

$kode = $_GET['kode'];
$nm_pembeli = $_GET['nm_pembeli'];
$nm_brng = $_GET['nm_brng'];
$jml = $_GET['jml'];
$ukuran = $_GET['ukuran'];
$harga = $_GET['harga'];
$total = $jml * $harga;
$warna = $_GET['warna'];
$tgl = $_GET['tgl'];
$ket = $_GET['ket'];

$sql = "INSERT INTO transaksi (kode, nm_pembeli, nm_brng, jml, ukuran, harga, total, warna, tgl, ket)
VALUES ('$kode', '$nm_pembeli', '$nm_brng', '$jml', '$ukuran', '$harga', '$total', '$warna' ,'$tgl', '$ket')";
if(mysqli_query($conn, $sql)){
    header("location:transaksi.php"); 
} else{
    echo "ERROR: Data Gagal Ditambahkan! $sql. " . mysqli_error($conn);
}

//mysql_close($host);
?>