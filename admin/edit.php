<?php
//include('dbconnected.php');
include('../koneksi.php');

$id = $_GET['id'];
$kode = $_GET['kode'];
$nm_pembeli = $_GET['nm_pembeli'];
$nm_brng = $_GET['nm_brng'];
$jml = $_GET['jml'];
$ukuran = $_GET['ukuran'];
$harga = $_GET['harga'];
$total = $_GET['total'];
$warna = $_GET['warna'];
$tgl = $_GET['tgl'];
$ket = $_GET['ket'];

//query update
$query = mysqli_query($conn,"UPDATE transaksi SET kode='$kode', nm_pembeli='$nm_pembeli', nm_brng='$nm_brng', jml='$jml', ukuran='$ukuran',
harga='$harga', total='$total', warna='$warna', tgl='$tgl', ket='$ket' WHERE id='$id'");

if ($query) {
 header("location:transaksi.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);
?>