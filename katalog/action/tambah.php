<?php 
// koneksi database
include '../config/config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$ukuran = $_POST['ukuran'];
$stok = $_POST['stok'];
$merek = $_POST['merek'];
$warna = $_POST['warna'];
 
// menginput data ke database
$sql = "INSERT INTO barang (`nama`, `ukuran`, `stok`, `merek`, `warna`) values('$nama','$ukuran','$stok', '$merek', '$warna')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// mengalihkan halaman kembali ke index.php
header("location:$server/index.php?page=list");
 
?>