<?php
include 'koneksi.php';

if (isset($_POST['input'])) {
  $kode = $_POST['kode'];
  $tanggal = $_POST['tanggal'];
  $perihal = $_POST['perihal'];
  $asal = $_POST['asal'];

  $query = "INSERT INTO masuk VALUES ('$kode', '$tanggal', '$perihal','$asal')";
  $result = mysqli_query($conn, $query);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($conn).
           " - ".mysqli_error($conn));
  }
}

header("location:suratmasuk.php");
?>