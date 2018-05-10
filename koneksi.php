<?php
$host_name = "localhost";
$user_name = "root";
$password = "";
$database = "utp";


$conn = mysqli_connect($host_name, $user_name, $password, $database);
$db = mysqli_select_db($conn, $database);

if(!$conn){
	die("Koneksi Error: " . mysqli_connect_error());
}

?>