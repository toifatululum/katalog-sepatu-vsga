<?php 
session_start();
// koneksi database
include '../config/config.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menginput data ke database
$sql = "select * from users where username='$username' and password='$password'";

$data = $conn->query($sql);
$row = mysqli_num_rows($data);

if($row > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:$server/index.php?page=list");
}else{
	header("location:$server/index.php?page=login");
}
?>