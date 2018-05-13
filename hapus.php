#hapus.php
<?php 
include 'koneksi.php';
$nama = $_GET ['nama'];
$hapus= mysqli_query ($conn, "delete from UTP WHERE nama='$nama'") or die(mysql_error());
header ("location:view.php");
?>
