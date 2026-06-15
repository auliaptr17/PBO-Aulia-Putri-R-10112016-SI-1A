<?php

include 'koneksi.php';

$id_supplier = $_GET['id_supplier'];

mysqli_query(
    $koneksi,
    "DELETE FROM tb_supplier
     WHERE id_supplier='$id_supplier'"
);

header("location:supplier.php?pesan=hapus");

?>