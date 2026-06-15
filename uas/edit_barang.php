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
        include "koneksi.php";

        $kd_barang = $_GET['id'];

        $query = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE kd_barang='$kd_barang'");
        while($data = mysqli_fetch_array($query)){
        ?>

        <form action="update_barang.php" method="post">
            <table>

                <tr>
                    <td>Kode Barang</td>
                    <td>
                        <input type="text"
                               name="kode_barang"
                               value="<?php echo $data['kd_barang']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Nama Barang</td>
                    <td>
                        <input type="text"
                               name="nama_barang"
                               value="<?php echo $data['nama_barang']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Stok</td>
                    <td>
                        <input type="number"
                               name="stok"
                               value="<?php echo $data['stok']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Harga</td>
                    <td>
                        <input type="number"
                               name="harga"
                               value="<?php echo $data['harga_jual']; ?>">
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