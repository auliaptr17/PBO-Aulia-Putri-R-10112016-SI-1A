<?php

function formatRupiah($angka){
return "Rp" . number_format($angka, 0, ',', ',');
}

class Produk{

public $nama;
public $harga;

public function hitungSubTotal($jumlah){
    return $this->harga * $jumlah;
}

public function hitungDiskon($subTotal, $persentaseDiskon){
    return ($persentaseDiskon / 100) * $subTotal;
}

public function hitungTotal($jumlah, $persentaseDiskon){
    $subTotal = $this->hitungSubTotal($jumlah);
    $diskon = $this->hitungDiskon($subTotal, $persentaseDiskon);
    return $subTotal - $diskon;
}

}

$data = [
    "nama" => htmlspecialchars($_POST['nama']),
    "harga" => (int) $_POST['harga'],
    "jumlah" => (int) $_POST['jumlah'],
    "diskon" => (int) $_POST['diskon']
];

$produk = new Produk();
$produk->nama = $data["nama"];
$produk->harga = $data["harga"];

$subTotal = $produk->hitungSubTotal($data["jumlah"]);
$diskon = $produk->hitungDiskon($subTotal, $data["diskon"]);
$total = $produk->hitungTotal($data["jumlah"], $data["diskon"]);

echo "<h2>HASIL BELANJA</h2>";
echo "Produk : " . $produk->nama . "<br>";
echo "Harga : " . formatRupiah($produk->harga) . "<br>";
echo "Jumlah : " . $data["jumlah"] . "<br>";
echo "SubTotal : " . formatRupiah($subTotal) . "<br>";
echo "Diskon : " . $data["diskon"] . "%) : " . formatRupiah($diskon) . "<br>";
echo "<b>Total Bayar : " . formatRupiah($total) . "<br>";

?>