<?php
// membuat koneksi databse //

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cubykids';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo ' error : ' . mysqli_connect_error($conn);
}
?>