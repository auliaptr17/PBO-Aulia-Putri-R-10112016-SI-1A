<?php

//overriding
class Produk{
    public $namaBarang;
    public $harga;

    public function __construct($namaBarang, $harga){
    $this->nama=$namaBarang;
    $this->harga=$harga;
    }
    
    public function getInfo(){
        return "Produk: $this->nama - Rp ".number_format($this->harga,0,",",".");
    }
}

//pewarisan dari class Produk
class ProdukDigital extends Produk{

    public $ukuranFile;
    
    public function __construct($namaBarang, $harga, $ukuranFile){
        parent:: __construct($namaBarang, $harga);
        $this->ukuran=$ukuranFile;
    }

    public function getInfo(){
        return "Produk Digital: $this->nama - Rp ". number_format($this->harga,0,",","."). " -  Size:$this->ukuran MB";
    } 
}

$produk1 = new Produk ("Buku", 50000);
$produk2 = new ProdukDigital("E-Book PHP", 200000, 100);

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
?>

<?php

$data = [
   ["tipe"=>"produk", "nama"=>"Buku", "harga"=>5000],
   ["tipe"=> "digital", "nama"=>"EBook", "harga"=>100000, "size"=>25],
];
   
foreach ($data as $d){
    if ($d["tipe"] == "produk"){
        $obj = new Produk($d["nama"], $d["harga"]);
    } else {
        $obj = new ProdukDigital($d["nama"], $d["harga"], $d["size"]);
    }
echo $obj->getInfo()."<br>";

}
?>

