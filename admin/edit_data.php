<?php
//include('dbconnected.php');
include('../koneksi.php');

$id = $_GET['id'];
$nama = $_GET['nama'];
$jenis = $_GET['jenis'];
$bahan = $_GET['bahan'];
$ukuran = $_GET['ukuran'];
$harga = $_GET['harga'];
$warna = $_GET['warna'];
$tgl = $_GET['tgl'];
$jml = $_GET['jml'];
$ket = $_GET['ket'];

//query update
$query = mysqli_query($conn,"UPDATE barang SET nama='$nama', jenis='$jenis', bahan='$bahan', ukuran='$ukuran', harga='$harga',
warna='$warna', tgl='$tgl', jml='$jml', ket='$ket' WHERE id='$id'");

if ($query) {
 header("location:simpan.php"); 
}
else{
 echo "ERROR: Data Gagal Diupdate!". mysqli_error($conn);
}

//mysql_close($host);
?>