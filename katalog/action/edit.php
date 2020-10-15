
<?php 
// koneksi database
include '../config/config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$ukuran = $_POST['ukuran'];
$stok = $_POST['stok'];
$merek = $_POST['merek'];
$warna = $_POST['warna'];
$id = $_POST['id'];
 
// mengedit data ke database
// $sql = "INSERT INTO barang (`nama`, `ukuran`, `stok`, `merek`, `warna`) values('$nama','$ukuran','$alamat', '$merek', '$warna')";
$sql = "UPDATE barang SET `nama`='$nama', `ukuran`='$ukuran', `stok`='$stok', `warna`='$warna'  WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "edit record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// mengalihkan halaman kembali ke index.php
header("location:$server/index.php?page=list");
 
?>