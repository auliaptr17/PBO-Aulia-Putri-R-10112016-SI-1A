<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD dengan PHP dan MYSQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
    </div>

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

    <div class="container">
        <br/>
        <?php
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo "<b>Data berhasil di input!</b>";
            }else if($pesan == "update"){
                echo "<b>Data berhasil di update!</b>";
            }else if($pesan == "hapus"){
                echo "<b>Data berhasil di hapus!</b>";
            }
        }
        ?>
        
        <a class="tombol" href="input.php">+ Tambah Data Baru</a>

        <h3>Data User</h3>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Opsi</th>		
            </tr>

            <?php 
            include "koneksi.php"; //fungsi READ agar tidak perlu menulis ulang kode untuk koneksi database
            try {
                $query_mysql = mysqli_query($koneksi, "SELECT * FROM user"); 
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){ //data array 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
                </td>
            </tr>
            
            <?php 
                } 
            } catch (Exception $e) {
                echo "<tr><td colspan='5'>Terjadi kesalahan: " . $e->getMessage() . "</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>