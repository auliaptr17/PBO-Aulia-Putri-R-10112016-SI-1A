<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Customer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="judul">
        <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
        <h2>Edit Data Customer</h2>
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

        <a href="customer.php">Lihat Semua Data Customer</a>
        <br><br>

        <h3>Edit Data Customer</h3>

        <?php include "koneksi.php"; ?>

<a href="input_customer_aksi.php">+ Tambah Customer</a>

<h2>Data Customer</h2>
<table border="1">
<tr>
    <th>No</th>
    <th>Nama Customer</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Opsi</th>
</tr>

<?php
$no=1;
$data=mysqli_query($koneksi,"SELECT * FROM tb_customer");

while($d=mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama_customer']; ?></td>
    <td><?php echo $d['alamat_customer']; ?></td>
    <td><?php echo $d['telepon_customer']; ?></td>
    <td>
        <a href="edit_customer.php?id=<?php echo $d['id_customer']; ?>">Edit</a>
        |
        <a href="hapus_customer.php?id=<?php echo $d['id_customer']; ?>">Hapus</a>
    </td>
</tr>

<?php } ?>
</table>