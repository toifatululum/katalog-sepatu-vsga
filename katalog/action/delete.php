<?php 
// menangkap data yang di kirim dari form
$id = $_GET['id'];
 
// menginput data ke database
$sql = "DELETE FROM barang WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "New delete created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// mengalihkan halaman kembali ke index.php
// header("location:../index.php");
header("location:$server/index.php?page=list");
 
?>