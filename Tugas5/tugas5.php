<?php

class PembelianToko{
 //variabel
    public $dataPembeli;

// construct menerima array
public function __construct($data){
    $this->dataPembeli = $data;
}

//method menghitung diskon
public function hitungDiskon($member, $totalBelanja){
    $diskon = 0;
    if ($member == "Memiliki Member"){
        if ($totalBelanja >= 500000){
            $diskon = 50000;
        } elseif ($totalBelanja >= 100000){
            $diskon = 15000;
        }
} else {
    if ($totalBelanja >= 100000){
        $diskon = 5000;
    }
}
return $diskon;

} 
   
//menampilkan hasil
public function getData(){
    echo "<h3>Data Pembelian Toko</h3>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
        <th>No</th>
        <th>Pembeli</th>
        <th>Kartu Member</th>
        <th>Total Bayar</th>
        <th>Diskon</th>
        <th>Total Bayar</th>
    </tr>";

$no = 1; //nomor urut data pada tabel
foreach ($this->dataPembeli as $pembeli){ //mengambil data pada array
    $diskon = $this->hitungDiskon(
        $pembeli['member'],
        $pembeli['belanja']
    );

$totalBayar = $pembeli['belanja'] - $diskon;

//menampilkan data pada HTML
echo"<tr>
        <td>$no</td>
        <td>{$pembeli['nama']}</td>
        <td>{$pembeli['member']}</td>
        <td>{$pembeli['belanja']}</td>
        <td>$diskon</td>
        <td>$totalBayar</td>
    </tr>";

$no++;
}
    echo "</table>";
}
}  

//array 
$data = [
    ["nama"=>"Pembeli 1","member"=>"Memiliki Member","belanja"=>200000],
    ["nama"=>"Pembeli 2","member"=>"Memiliki Member","belanja"=>570000],
    ["nama"=>"Pembeli 3","member"=>"Tidak Memiliki Member","belanja"=>120000],
    ["nama"=>"Pembeli 4","member"=>"Tidak Memiliki Member","belanja"=>90000],
];

//menampilkan data
$obj = new PembelianToko($data);
$obj->getData();

?>