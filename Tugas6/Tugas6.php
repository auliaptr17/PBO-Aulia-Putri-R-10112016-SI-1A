<?php

function formatVolume($angka) {
    return $angka; // Mengembalikan angka asli
}

class BangunRuang{
 
//variabel
public $jenisBangun;
public $sisi;
public $jariJari;
public $tinggi;
public $volume;

//method menghitung volume bangun ruang
public function hitungVolume(){
$phi = 3.14;
$volume = 0;

if ($this->jenisBangun == "Bola") {
    // Rumus: 4/3 * phi * r^3
        $volume = (4/3) * $phi * pow($this->jariJari, 3);
    } 
    elseif ($this->jenisBangun == "Kerucut") {
    // Rumus: 1/3 * phi * r^2 * t
        $volume = (1/3) * $phi * pow($this->jariJari, 2) * $this->tinggi;
    } 
    elseif ($this->jenisBangun == "Limas Segi Empat") {
    // Rumus: 1/3 * Luas Alas (sisi*sisi) * t
        $volume = (1/3) * pow($this->sisi, 2) * $this->tinggi;
    } 
    elseif ($this->jenisBangun == "Kubus") {
    // Rumus: sisi^3
        $volume = pow($this->sisi, 3);
    } 
    elseif ($this->jenisBangun == "Tabung") {
    // Rumus: phi * r^2 * t
        $volume = $phi * pow($this->jariJari, 2) * $this->tinggi;
        }

        return $volume;
    }
}   

//data array
$dataBangunRuang = [
    
    [
        "Jenis" => "Bola",
        "Sisi" => 0,
        "JariJari" => 7,
        "Tinggi" => 0
    ],
    [
        "Jenis" => "Kerucut",
        "Sisi" => 0,
        "JariJari" => 14,
        "Tinggi" => 10
    ],
    [
        "Jenis" => "Limas Segi Empat",
        "Sisi" => 8,
        "JariJari" => 0,
        "Tinggi" => 24
    ],
    [
        "Jenis" => "Kubus",
        "Sisi" => 30,
        "JariJari" => 0,
        "Tinggi" => 0
    ],
    [
        "Jenis" => "Tabung",
        "Sisi" => 0,
        "JariJari" => 7,
        "Tinggi" => 10
    ]
];

//tabel dengan struktur HTML
echo "<table border='1' cellpadding='6'>";
echo "<tr style='background-color: blue; color: white;'>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-Jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
        </tr>";

//struktur perulangan untuk memproses data 
foreach ($dataBangunRuang as $d){
    $bangun = new BangunRuang();

    $bangun->jenisBangun = $d["Jenis"];
    $bangun->sisi = $d["Sisi"];
    $bangun->jariJari = $d["JariJari"];
    $bangun->tinggi = $d["Tinggi"];

    $hasilVolume = $bangun->hitungVolume(); //memanggil method hitung volume

//menampilkan tabel hitung bangun ruang
echo "<tr>";
echo "<td>".$bangun->jenisBangun."</td>";
echo "<td>".$bangun->sisi."</td>";
echo "<td>".$bangun->jariJari."</td>";
echo "<td>".$bangun->tinggi."</td>";
echo "<td>".$hasilVolume."</td>";
echo "</tr>";
}

echo "</table>";

?>



