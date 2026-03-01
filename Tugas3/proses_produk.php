<?php

class Produk {

    public $nama;
    public $harga;

    public function statusHarga() {
        if ($this->harga > 100000) {
            return "Produk Mahal";
        } else {
            return "Produk Terjangkau";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $produk1 = new Produk();
    $produk1->nama = htmlspecialchars($_POST['nama']);
    $produk1->harga = htmlspecialchars($_POST['harga']);

    echo "<h2>Data Produk</h2>";
    echo "Nama Produk : " . $produk1->nama . "<br>";
    echo "Harga : Rp " . number_format($produk1->harga,0,',','.') . "<br>";
    echo "Status : " . $produk1->statusHarga();
}

?>