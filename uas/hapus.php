<?php 

include 'koneksi.php';
//mengambil ID unik dari URL
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");

header("location:index.php?pesan=hapus");

?>

