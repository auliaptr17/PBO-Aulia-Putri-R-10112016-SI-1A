<?php

include 'koneksi.php';

$kode_barang = $_POST['id_customer'];
$nama_barang = $_POST['nama_customer'];
$stok        = $_POST['alamat_customer'];
$harga       = $_POST['telepon_customer'];

mysqli_query($koneksi, "UPDATE tb_customer SET nama_customer='$nama_customer', alamat_customer='$alamat_customer', telepon_customer='$telepon_customer'
 WHERE id_customer='$id_customer'");

header("location:barang.php?pesan=update");

?>