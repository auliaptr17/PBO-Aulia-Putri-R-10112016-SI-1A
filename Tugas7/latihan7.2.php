<?php

class Employee{ //class utama

//overriding
public $namaKaryawan;
public $gajiPokok;
public $masaKerja;

public function __construct ($namaKaryawan, $gajiPokok, $masaKerja){
    $this->namaKaryawan=$namaKaryawan;
    $this->gaji=$gajiPokok;
    $this->masaKerja=$masaKerja;
}
//method hitung gaji employee
    public function getInfo(){
    return "Nama: $this->namaKaryawan | Gaji Pokok: Rp " . number_format($this->gaji,0,",",".");
    }
}

//class turunan
class Programmer extends Employee{

//method hitung gaji Programmer
    public function hitungGaji(){
        $bonus = 0;
        if ($this->masaKerja >= 1 && $this->masaKerja <= 10){
            $bonus = 0.01 * $this->masaKerja * $this->gaji;
        } elseif ($this->masaKerja > 10){
            $bonus = 0.02 * $this->masaKerja * $this->gaji;
        }
        return $this->gaji + $bonus;
    }
    
}

//class turunan
class Direktur extends Employee{

//method hitung gaji direktur
    public function hitungGaji(){
        $bonus = 0.5 * $this->masaKerja * $this->gaji;
        $tunjangan =  0.1 * $this->masaKerja * $this->gaji;
        return $this->gaji  + $bonus + $tunjangan;   
    }

}

//class turunan
class PegawaiMingguan extends Employee{
    
    public $hargaBarang;
    public $stockBarang;
    public $totalPenjualan;

    public function __construct ($namaKaryawan, $gajiPokok, $masaKerja, $hargaBarang, $stockBarang, $totalPenjualan){
        parent:: __construct($namaKaryawan, $gajiPokok, $masaKerja);
        $this->hargaBarang=$hargaBarang;
        $this->stockBarang=$stockBarang;
        $this->totalPenjualan=$totalPenjualan;
        }

    //method untuk menghitung gaji pegawai mingguan
    public function hitungGaji(){
        $persentasePenjualan = ($this->totalPenjualan / $this->stockBarang) * 100;
        if ($persentasePenjualan > 70){
            $tambahanGaji = 0.1 * $this->hargaBarang * $this->totalPenjualan;
        } else {
            $tambahanGaji = 0.03 * $this->hargaBarang * $this->totalPenjualan;
        }
        return $this->gaji + $tambahanGaji;
    }

}

//data array
$dataPegawai  = [
    [
        "jabatan" => "programmer",
        "namaKaryawan" => "Wonwoo",
        "gaji" => 5000000,
        "masaKerja" => 5
    ],
    [
        "jabatan" => "direktur",
        "namaKaryawan" => "Seungcheol",
        "gaji" => 15000000,
        "masaKerja" => 12
    ],
    [
        "jabatan" => "mingguan",
        "namaKaryawan" => "Seungkwan",
        "gaji" => 2000000,
        "masaKerja" => 2 ,
        "hargaBarang" => 300000,
        "stockBarang" => 100,
        "totalPenjualan" => 80
    ],
];

//membuat tabel dengan struktur HTML
echo "<h3> Daftar Gaji Karyawan</h3>";
echo "<table border='1' cellpadding='6'>";
echo "<tr style='background-color: violet; color: white;'>
        <th>Jabatan</th>
        <th>Nama Karyawan</th>
        <th>Masa Kerja</th>
        <th>Gaji Pokok</th>
        <th>Total Gaji</th>
        </tr>";

//struktur perulangan untuk memproses data
foreach ($dataPegawai as $p){
    if ($p ["jabatan"] == "programmer"){
        $obj = new Programmer ($p["namaKaryawan"], $p["gaji"], $p["masaKerja"]);
        $jabatan = "Programmer";
    } elseif ($p ["jabatan"] == "direktur"){
        $obj = new Direktur ($p["namaKaryawan"], $p["gaji"], $p["masaKerja"]);
        $jabatan = "Direktur";
    }else {
        $obj = new PegawaiMingguan ($p["namaKaryawan"], $p["gaji"], $p["masaKerja"], $p["hargaBarang"], $p["stockBarang"], $p["totalPenjualan"]);
        $jabatan = "Pegawai Mingguan";
    }

//menampilkan data ke dalam tabel 
echo "<tr>
        <td align='center'> $jabatan</td>
        <td> {$obj->namaKaryawan}</td>
        <td align='center'>{$obj->masaKerja} Tahun</td>
        <td> Rp " . number_format($obj->gaji, 0, ",", ".") . "</td>
        <td><strong> Rp" . number_format($obj->hitungGaji(), 0, ",", ".") . "</strong></td>
        </tr>";

}

echo "</table>";
        

?>
    