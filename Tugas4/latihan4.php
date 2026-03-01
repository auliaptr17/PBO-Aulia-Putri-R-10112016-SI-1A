<?php

//function
function formatRupiah($angka){
return "Rp" . number_format($angka, 0, '.', '.');
}

class Belanja{

//variable
public $namaPembeli;
public $namaBarang;
public $hargaBarang;
public $jumlahBeli;

//method untuk menghitung subtotal
public function hitungSubTotal(){
   return $this->hargaBarang * $this->jumlahBeli; //operator aritmatika 
}

public function hitungTotalDenganDiskon ($persentaseDiskon){
    $subTotal = $this->hitungSubTotal();
    $diskon = ($persentaseDiskon / 100) * $subTotal;
    return $subTotal - $diskon;
}

}

//array data pembelian
$data = [
    'namaPembeli' => 'Ivan',
    'namaBarang' => 'Sepatu',
    'hargaBarang' => 1000000,
    'jumlahBeli' => 2,

];

//instantiasi objek belanja dari class belanja
$belanja = new Belanja();
$belanja->namaPembeli = $data["namaPembeli"];
$belanja->namaBarang = $data["namaBarang"];
$belanja->hargaBarang = $data["hargaBarang"];
$belanja->jumlahBeli = $data["jumlahBeli"];

echo "<h2> Struk Belanja Toko Aul <h2>";
echo "Nama Pembeli : " . $belanja->namaPembeli . "<br.";
echo "Nama Barang : " . $belanja->namaBarang . "<br.";
echo "SubTotal : " . formatRupiah($belanja->hitungSubTotal()) . "<br.";
echo "Total (Diskon 20%) : " . formatRupiah($belanja->hitungTotalDenganDiskon(10)) . "<br.";

?>