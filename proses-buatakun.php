<html>
<link rel="stylesheet" href="style.css">
<head><title>Buat Akun</title><head>

<?php
include 'koneksi.php';

$email = ($_POST['email']);
$username = $_POST['username'];
$password = ($_POST['password']);


$insert=("INSERT INTO akun (email,username,password) VALUES ('$email','$username','$password')");
mysqli_query($conn,$insert);
?>

<body background="background.jpg">
<div class="loader">
<center><span style="padding-left:0em"><font size="9px" color="white">Account Created!</a>
<center><span style="padding-left:0em"><a href="index.php"><font size="3px" color="white">< Back</a>
</div>
<body>

</html>