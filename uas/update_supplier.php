<?php

include 'koneksi.php';

$id_supplier      = $_POST['id_supplier'];
$nama_supplier    = $_POST['nama_supplier'];
$alamat_supplier  = $_POST['alamat_supplier'];
$telepon_supplier = $_POST['telepon_supplier'];
$email_supplier   = $_POST['email_supplier'];
$pass_supplier    = $_POST['pass_supplier'];

mysqli_query(
    $koneksi,
    "UPDATE tb_supplier SET
        nama_supplier='$nama_supplier',
        alamat_supplier='$alamat_supplier',
        telepon_supplier='$telepon_supplier',
        email_supplier='$email_supplier',
        pass_supplier='$pass_supplier'
    WHERE id_supplier='$id_supplier'"
);

header("location:supplier.php?pesan=update");

?>