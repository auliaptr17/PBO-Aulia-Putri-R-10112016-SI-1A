<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Supplier</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="judul">
        <h1>INVENTORY GUDANG</h1>
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

<?php
include "koneksi.php";

$id_supplier = $_GET['id_supplier'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM tb_supplier WHERE id_supplier='$id_supplier'"
);

while($data = mysqli_fetch_array($query)){
?>

<form action="update_supplier.php" method="post">

<table>

<tr>
    <td>ID Supplier</td>
    <td>
        <input type="text"
               name="id_supplier"
               value="<?php echo $data['id_supplier']; ?>"
               readonly>
    </td>
</tr>

<tr>
    <td>Nama Supplier</td>
    <td>
        <input type="text"
               name="nama_supplier"
               value="<?php echo $data['nama_supplier']; ?>">
    </td>
</tr>

<tr>
    <td>Alamat</td>
    <td>
        <input type="text"
               name="alamat_supplier"
               value="<?php echo $data['alamat_supplier']; ?>">
    </td>
</tr>

<tr>
    <td>Telepon</td>
    <td>
        <input type="text"
               name="telepon_supplier"
               value="<?php echo $data['telepon_supplier']; ?>">
    </td>
</tr>

<tr>
    <td>Email</td>
    <td>
        <input type="email"
               name="email_supplier"
               value="<?php echo $data['email_supplier']; ?>">
    </td>
</tr>

<tr>
    <td>Password</td>
    <td>
        <input type="text"
               name="pass_supplier"
               value="<?php echo $data['pass_supplier']; ?>">
    </td>
</tr>

<tr>
    <td></td>
    <td>
        <input type="submit" value="Simpan">
    </td>
</tr>

</table>

</form>

<?php } ?>