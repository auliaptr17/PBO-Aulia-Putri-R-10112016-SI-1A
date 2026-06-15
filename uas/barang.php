<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="judul">
        <h1>INVENTORY GUDANG</h1>
        <h2>Edit Data Barang</h2>
    </div>

    <br/>

    <nav class="menu">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>

                <li>
                    <a href="#">Data Master</a>
                    <ul>
                        <li><a href="barang.php">Data Barang</a></li>
                        <li><a href="customer.php">Data Customer</a></li>
                        <li><a href="supplier.php">Data Supplier</a></li>
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
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <a href="barang.php">Lihat Semua Data Barang</a>
        <br><br>

        <h3>Edit Data Barang</h3>

<?php 
include "koneksi.php"; ?>

<a href="input_barang_aksi.php">+ Tambah Barang</a>

<h2>Data Barang</h2>
<table border="2">
<tr>
    <th>No</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Stok</th>
    <th>Harga</th>
    <th>Opsi</th>
</tr>

<?php
$no=1;
$data=mysqli_query($koneksi,"SELECT * FROM tb_barang");

while($d=mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['kd_barang']; ?></td>
    <td><?php echo $d['nama_barang']; ?></td>
    <td><?php echo $d['stok']; ?></td>
    <td><?php echo $d['harga_jual']; ?></td>
    <td>
        <a href="edit_barang.php?id=<?php echo $d['kd_barang']; ?>">Edit</a>
        <a href="hapus_barang.php.php?id=<?php echo $d['kd_barang']; ?>">Hapus</a>
    </td>
</tr>

<?php } ?>
</table>