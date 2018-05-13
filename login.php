<?php
include 'koneksi.php';
$email = $_POST['email'];
$username = $_POST['username'];
$password = ($_POST['password']);

$login = mysqli_query($conn,"SELECT * FROM akun WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($login);
echo $cek;


if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	echo"login berhasil";
	header("location:home.php");
}

else{
	echo"login gagal";
	header("location:index.php");
}
	?>
