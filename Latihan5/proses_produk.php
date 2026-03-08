<?php

function formatRupiah($angka){
return "Rp" . number_format($angka, 0, '.', '.');
}

class BelanjaWarung{
    //variabel 
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    //method untuk menghitung subtotal
    public function hitungSubTotal(){
        return $this->hargaBarang * $this->jumlahBeli; //operator aritmatika 
    }

    public function hitungDiskon ($subTotal){
    if ($subTotal > 100000){
        return $subTotal * 0.1;
    }
    return 0;
    }

    public function hitungTotal(){
    $subTotal = $this->hitungSubTotal();
    $diskon = $this->hitungDiskon($subTotal);
    return $subTotal - $diskon;
    }

}

$errors = [];

$nama = trim($_POST['nama']??'');
$barang = trim(string: $_POST['barang'] ?? '');
$harga  = (int) ($_POST['harga'] ?? 0);
$jumlah = (int) ($_POST['jumlah'] ?? 0);

if (empty($nama)) {
    $errors[] = "Nama pembeli tidak boleh kosong.";
}

if (empty($barang)) {
    $errors[] = "Nama barang tidak boleh kosong.";
}

if ($harga <= 0) {
    $errors[] = "Harga harus lebih dari 0.";
}

if ($jumlah <= 0) {
    $errors[] = "Jumlah beli harus lebih dari 0.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Belanja</title>
</head>
<body>

<h2>Hasil Proses Belanja</h2>

<?php if (!empty($errors)) : ?>

<div style="color:red;">
    <b>Terjadi Kesalahan:</b>
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<a href="form_produk.php">Kembali ke Form</a>

<?php else : ?>
<?php
$belanja = new BelanjaWarung();
$belanja->namaPembeli = htmlspecialchars(string: $nama);
$belanja->namaBarang  = htmlspecialchars(string: $barang);
$belanja->hargaBarang = $harga;
$belanja->jumlahBeli  = $jumlah;

$subtotal = $belanja->hitungSubtotal();
$diskon   = $belanja->hitungDiskon($subtotal);
$total    = $belanja->hitungTotal();
?>

Pembeli : <?= $belanja->namaPembeli ?><br>
Barang : <?= $belanja->namaBarang ?><br>
Subtotal: <?= formatRupiah($subtotal) ?><br>
Diskon : <?= formatRupiah($diskon) ?><br>
<b>Total Bayar: <?= formatRupiah($total) ?></b><br><br>

<a href="form_produk.php">Input Lagi</a>
<?php endif; ?>

</body>
</html>