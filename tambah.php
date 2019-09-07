<?php 
include 'koneksi.php';
$nama = $_POST['nama'];

 
$query="INSERT INTO categories SET nama='$nama'";
mysqli_query($koneksi, $query);
 
header("location:kategori.php?pesan=input");
?>