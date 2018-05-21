<?php
  $file_user = $_FILES["file_user"]["tmp_name"];
  $namafile = $_FILES["file_user"]["name"];
 
  $tujuan = "C:\\xampp\\htdocs\\utp\\images\\" . $namafile;
 
  if ($file_user != "none") {
    copy($file_user, $tujuan);
    echo "File User: $file_user<br />";
    echo "Tujuan: $tujuan";
  } else {
    echo "<h3>Upload Error!</h3>";
    echo "Anda belum memilih file yang akan di-upload.";
  }
?>