<?php
if (isset($_POST['edit'])) {
  include("koneksi.php");

  $kode = $_POST['kode'];
  $tanggal = $_POST['tanggal'];
  $perihal	= $_POST['perihal'];
  $asal	= $_POST['asal'];

  $query  = "UPDATE masuk SET ";
  $query .= "tanggal = '$tanggal', perihal = '$perihal', ";
  $query .= "asal='$asal', ";
  $query .= "WHERE kode = '$kode'";

  $result = mysqli_query($conn, $query);

  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
  }
}
header("location:home.php");

?>