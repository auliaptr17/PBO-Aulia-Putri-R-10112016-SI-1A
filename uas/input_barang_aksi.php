<?php

include 'koneksi.php';

$kode_barang=$_POST['kd_barang'];
$nama_barang=$_POST['nama_barang'];
$stok=$_POST['stok'];
$harga=$_POST['harga_jual'];

mysqli_query($koneksi, "INSERT INTO tb_barang (kd_barang,nama_barang,stok,harga_jual) VALUES('$kode_barang','$nama_barang','$stok','$harga')"
);

header("location:barang.php");