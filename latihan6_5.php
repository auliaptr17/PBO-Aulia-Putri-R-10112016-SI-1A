<?php

function formatRupiah($angka){
return "Rp" . number_format($angka, 0, '.', '.'); //mengembalikan nilai rupiah
}

class BelanjaWarung{
    //variabel 
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;
    public $member;

    //method untuk menghitung subtotal
    public function hitungSubTotal(){
        return $this->hargaBarang * $this->jumlahBeli; //operator aritmatika 
    }

    public function hitungDiskon($subTotal){
        $diskon = 0;
    
        if($this->member == true){
            if($subTotal >= 500000){
                $diskon = 50000;
            }
            elseif($subTotal >= 100000){
                $diskon = 15000;
            }
        }
    else{

        if ($subTotal >= 100000){
            $diskon = 5000;
        }
    }
    return $diskon;
    }

    public function hitungTotal(){
   
        $subTotal = $this->hitungSubTotal();
        $diskon = $this->hitungDiskon($subTotal);
        
        return $subTotal - $diskon;

    }

}

//data array
$dataBelanja = [

    [
        "Nama" => "Budi",
        "Barang" => "Gula 1 kg",
        "Harga" => 65000,
        "Jumlah" => 2,
        "Member" => TRUE
    ],

    [
        "Nama" => "Sinta",
        "Barang" => "Minyak 1 lt",
        "Harga" => 140000,
        "Jumlah" => 1,
        "Member" => FALSE
    ],

    [
        "Nama" => "Rani",
        "Barang" => "Tepung 1/4",
        "Harga" => 50000,
        "Jumlah" => 3,
        "Member" => TRUE
    ]

];

//tabel dengan struktur HTML
echo "<table border='1' cellpadding='6'>";

echo "<tr>
<th>No</th>
<th>Nama</th>
<th>Member</th>
<th>Barang</th>
<th>Subtotal</th>
<th>Diskon</th>
<th>Total</th>
</tr>";

////struktur perulangan untuk memproses data 
$no = 1;

foreach($dataBelanja as $d){
    $belanja = new BelanjaWarung();

    $belanja->namaPembeli = $d["Nama"];
    $belanja->namaBarang = $d["Barang"];
    $belanja->hargaBarang = $d["Harga"];
    $belanja->jumlahBeli = $d["Jumlah"];
    $belanja->member = $d["Member"];

    $subTotal = $belanja->hitungSubTotal();
    $diskon = $belanja->hitungDiskon($subTotal);
    $total = $belanja->hitungTotal();

//menampilkan tabel belanja
echo "<tr>";
echo "<td>".$no."</td>";
echo "<td>".$belanja->namaPembeli."</td>";
echo "<td>".($belanja->member ? "Ya" : "Tidak")."</td>";
echo "<td>".$belanja->namaBarang."</td>";
echo "<td>".formatRupiah($subTotal)."</td>";
echo "<td>".formatRupiah($diskon)."</td>";
echo "<td>".formatRupiah($total)."</td>";

echo "</tr>";

$no++;

}

echo "</table>";
?>