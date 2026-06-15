<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Supplier</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="judul">
        <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
        <h2>Edit Data Supplier</h2>
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

        <a href="customer.php">Lihat Semua Data Supplier</a>
        <br><br>

        <h3>Edit Data Supplier</h3>

<?php include "koneksi.php"; ?>

<a href="input_supplier_aksi.php">+ Tambah Supplier</a>

<h2>Data Supplier</h2>

<table border="1">
<tr>
    <th>No</th>
    <th>ID Supplier</th>
    <th>Nama Supplier</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Email</th>
    <th>Opsi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($koneksi,"SELECT * FROM tb_supplier");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['id_supplier']; ?></td>
    <td><?php echo $d['nama_supplier']; ?></td>
    <td><?php echo $d['alamat_supplier']; ?></td>
    <td><?php echo $d['telepon_supplier']; ?></td>
    <td><?php echo $d['email_supplier']; ?></td>

    <td>
        <a href="edit_supplier.php?id_supplier=<?php echo $d['id_supplier']; ?>">
            Edit
        </a>
        |
        <a href="hapus_supplier.php?id_supplier=<?php echo $d['id_supplier']; ?>">
            Hapus
        </a>
    </td>
</tr>

<?php } ?>

</table>