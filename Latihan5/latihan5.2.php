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

    public function hitungDiskon($subTotal){
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

$dataBelanja = [

    [
        "Nama" => "Budi",
        "Barang" => "Gula 1 kg",
        "Harga" => 6500,
        "Jumlah" => 2,
    ],

    [
        "Nama" => "Sinta",
        "Barang" => "Minyak 1 lt",
        "Harga" => 14000,
        "Jumlah" => 1,
    ]

];

echo "<h2>TRANSAKSI 1</h2>";

$errors1 = [];
$nama = $dataBelanja[0]["Nama"];
$barang = $dataBelanja[0]["Barang"];
$harga = $dataBelanja[0]["Harga"];
$jumlah = $dataBelanja[0]["Jumlah"];

if (empty($nama)){
    $errors1 [] = "Nama pembeli tidak boleh kosong";
}

if (empty($barang)) {
    $errors[] = "Nama barang tidak boleh kosong.";
}

if ($harga <= 0){
    $errors1 [] = "Harga harus lebih dari 0";
}

if ($jumlah <= 0){
    $errors1 [] = "Jumlah beli harus lebih dari 0";
}

if (!empty($errors1)){

foreach ($errors1 as $error) {
    echo $error . "<br>";
}

} else {
    $belanja1 = new BelanjaWarung();
    $belanja1->namaPembeli = $nama;
    $belanja1->namaBarang = $barang;
    $belanja1->hargaBarang = $harga;
    $belanja1->jumlahBeli = $jumlah;

    $subTotal = $belanja1->hitungSubTotal();
    $diskon = $belanja1->hitungDiskon($subTotal);
    $total = $belanja1->hitungTotal();

    echo "Pembeli : $belanja1->namaPembeli<br>";
    echo "Barang :  $belanja1->namaBarang <br>";
    echo "SubTotal : ". formatRupiah($subTotal) . "<br>";
    echo "<b>Total Bayar : " . formatRupiah($total) . "</br><br><br>";

}

echo "<h2>TRANSAKSI 2</h2>";

$errors2 = [];
$nama = $dataBelanja[1]["Nama"];
$barang = $dataBelanja[1]["Barang"];
$harga = $dataBelanja[1]["Harga"];
$jumlah = $dataBelanja[1]["Jumlah"];

if (empty($nama)){
    $errors2 [] = "Nama pembeli tidak boleh kosong";
}

if (empty($barang)) {
    $errors[] = "Nama barang tidak boleh kosong.";
}

if ($harga <= 0){
    $errors2 [] = "Harga harus lebih dari 0";
}

if ($jumlah <= 0){
    $errors2 [] = "Jumlah beli harus lebih dari 0";
}

if (!empty($errors2)){

foreach ($errors2 as $error) {
    echo $error . "<br>";
}

} else {
    $belanja2 = new BelanjaWarung();
    $belanja2->namaPembeli = $nama;
    $belanja2->namaBarang = $barang;
    $belanja2->hargaBarang = $harga;
    $belanja2->jumlahBeli = $jumlah;

    $subTotal = $belanja2->hitungSubTotal();
    $diskon = $belanja2->hitungDiskon($subTotal);
    $total = $belanja2->hitungTotal();

    echo "Pembeli : $belanja2->namaPembeli<br>";
    echo "Barang :  $belanja2->namaBarang <br>";
    echo "SubTotal : ". formatRupiah($subTotal) . "<br>";
    echo "<b>Total Bayar : " . formatRupiah($total) . "</br><br><br>";
    }


?>