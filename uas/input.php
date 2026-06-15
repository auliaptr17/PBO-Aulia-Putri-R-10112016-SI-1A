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
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>