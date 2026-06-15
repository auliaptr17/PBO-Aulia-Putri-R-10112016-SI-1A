<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Customer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="judul">
        <h1>INVENTORY GUDANG</h1>
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

        <a href="barang.php">Lihat Semua Data Customer</a>
        <br><br>

        <h3>Edit Data Customer</h3>

        <?php
        include "koneksi.php";

        $id_customer = $_GET['id_customer'];

        $query = mysqli_query($koneksi, "SELECT * FROM tb_customer WHERE id_customer='$id_customer'");
        while($data = mysqli_fetch_array($query)){
        ?>

        <form action="update_customer.php" method="post">
            <table>

                <tr>
                    <td>Id Customer</td>
                    <td>
                        <input type="text"
                               name="id_customer"
                               value="<?php echo $data['id_customer']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Nama Customer</td>
                    <td>
                        <input type="text"
                               name="nama_customer"
                               value="<?php echo $data['nama_customer']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="number"
                               name="alamat_customer"
                               value="<?php echo $data['alamat_customer']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Telepon</td>
                    <td>
                        <input type="number"
                               name="telepon_customer"
                               value="<?php echo $data['telepon_customer']; ?>">
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

    </div>

</body>
</html>