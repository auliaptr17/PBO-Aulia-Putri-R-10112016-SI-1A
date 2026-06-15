<?php 

include 'koneksi.php';
//mengambil ID unik
$kd_barang = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_barang WHERE kd_barang='$kd_barang'");

header("location:index.php?pesan=hapus");

?>

