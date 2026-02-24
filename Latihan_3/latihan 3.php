<?php
class Kendaraan { //ini adalah class

//instance class
    public $jumlahRoda = 4;
    public $warna;
    public $bahanBakar = "Premium";
    public $harga = 100000000;
    public $merk;
    public $tahunPembuatan = 2004;

    public function statusHarga() {
        if ($this->harga > 50000000) { //method
            return "Harga Kendaraan Mahal";
        } else {
            return "Harga Kendaraan Murah";
        }
    }

    public function statusSubsidi() {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            return "Dapat Subsidi";
        } else {
            return "Tidak Dapat Subsidi";
        }
    }
}

//pembuatan objek dari class
//Objek pertama
$objekKendaraan = new Kendaraan();
echo "Objek Kendaraan<br>";
echo "jumlahRoda : ".$objekKendaraan->jumlahRoda."<br>"; //proses instansiasi pemanggilan variable
echo "Status Harga : ".$objekKendaraan->statusHarga()."<br>"; //proses pemanggilan function dari kelas
echo "Status Subsidi : ".$objekKendaraan->statusSubsidi()."<br><br>";

// Objek kedua
$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->harga = 1000000;
$objekKendaraan1->tahunPembuatan = 1999;
echo "Objek Kendaraan 1<br>";
echo "Status Harga : ".$objekKendaraan1->statusHarga()."<br>";
echo "Status Subsidi : ".$objekKendaraan1->statusSubsidi();
?>