<?php

class Belanja { //ini adalah class Belanja

// instance variable
    public string $namaPembeli; //ini adalah variabel dengan tipe data string
    public string $namaBarang; //ini adalah varibel dengan tipe data string 
    public int $hargaBarang=5000;
    public int $jumlahBarang=2;
    public float $totalBayar;
    public float $diskon;

    //static variable
    public static float $pajak = 0.02;

    //local variable
    public function __construct($namaPembeli){ //method
        $this->namaPembeli =$namaPembeli;
    }
    public function hitungTotal(): float
    {
        $subTotal=$this->hargaBarang * $this->jumlahBarang; //operator aritmatika
        return $subTotal;
    }
    public function hitungDiskon(): float
    {
        $subdiskon=$this->hitungTotal * $this->diskon;
        return $subdiskon;
    }

    public function tampilRincian(): void{
        echo "Nama Pembeli: " .$this->namaPembeli . "<br>"; //menampilkan nama pembeli
        echo "Nama Barang : " .$this->namaBarang . "<br>"; //menampilkan nama barang
        echo "Harga Barang : " .$this->hargaBarang . "<br>"; //menampilkan harga barang
        echo "Jumlah Barang : " .$this->jumlahBarang . "<br>"; //menampilkan jumlah barang
        echo "Total Bayar : " .$this->hitungTotal() . "<br>"; //menampilkan total bayar
        echo "Total Diskon : " .$this->hitungDiskon(). "<br>"; //menampilkan totaL diskon

    }

}
//object
$belanja1 = new Belanja("Wonwoo");
$belanja1->tampilRincian(namaPembeli:$belanja1->namaPembeli);


            
?>