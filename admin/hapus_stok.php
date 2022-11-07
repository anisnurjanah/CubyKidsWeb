<?php
//include('dbconnected.php');
include('../koneksi.php');

$id = $_GET['id'];

//query update
$query = mysqli_query($conn,"DELETE FROM `barang` WHERE id = '$id'");

if ($query) {
 # credirect ke page index
 header("location:simpan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);
?>