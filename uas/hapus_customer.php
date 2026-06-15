<?php 

include 'koneksi.php';
//mengambil ID unik
$id_customer = $_GET['id_customer'];
mysqli_query($koneksi, "DELETE FROM tb_customer WHERE id_customer='$id_customer'");

header("location:index.php?pesan=hapus");

?>

