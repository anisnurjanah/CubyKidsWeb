<?php
//include('dbconnected.php');
include('../koneksi.php');

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
$query = mysqli_query($conn,"INSERT INTO `barang` (`id`, `nama`, `jenis`, `bahan`, `ukuran`, `harga`, `warna`, `tgl`,`jml`, `ket`)
VALUES (null, '$nama', '$jenis','$bahan', '$ukuran','$harga', '$warna','$tgl','$jml', '$ket')");

if ($query) {
 # credirect ke page index
 header("location:simpan.php"); 
}
else{
 echo "ERROR: Gagal Menambahkan Data!". mysqli_error($conn);
}

//mysql_close($host);
?>