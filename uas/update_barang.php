<?php

include 'koneksi.php';

$kode_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$stok        = $_POST['stok'];
$harga       = $_POST['harga-jual'];

mysqli_query($koneksi, "UPDATE tb_barang SET nama_barang='$nama_barang', stok='$stok', harga_jual='$harga'
 WHERE kd_barang='$kd_barang'");

header("location:barang.php?pesan=update");

?>