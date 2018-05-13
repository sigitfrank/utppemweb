<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$hapus = mysqli_query($conn, "delete from keluar WHERE kode='$kode'");
header("location:home.php");
?>
