<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>INVENTORY GUDANG</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
	
	<br/>
    <nav class="menu">
    <div class="container">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="#">Data Master</a>
                <ul>
                    <li><a href="index.php">Data User</a></li>
                    <li><a href="#">Data Barang</a></li>
                    <li><a href="#">Data Customer</a></li>
                    <li><a href="#">Data Supplier</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Data Transaksi</a>
                <ul>
                    <li><a href="#">Transaksi Pembelian</a></li>
                    <li><a href="#">Transaksi Penjualan</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Laporan</a>
                <ul>
                    <li><a href="#">Laporan Data Barang</a></li>
                    <li><a href="#">Laporan Data Customer</a></li>
                    <li><a href="#">Laporan Data Supplier</a></li>
                    <li><a href="#">Laporan Transaksi Pembelian</a></li>
                    <li><a href="#">Laporan Transaksi Penjualan</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id']; //mengambil ID unik dari URL
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>

	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>"> //mengirim data id ke file update.php

					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>


