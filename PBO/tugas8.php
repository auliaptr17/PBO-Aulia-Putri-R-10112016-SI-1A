<?php

class Karyawan{

public $namaKaryawan;
public $golongan;
public $jamLembur;
public $gajiPokok;
public $totalGaji;

    public function __construct($namaKaryawan, $golongan, $jamLembur){
        $this->namaKaryawan = $namaKaryawan;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;

        $this->gajiPokok = $this->getgajiPokok($golongan);
        $this->totalGaji = $this->gajiPokok + ($this->jamLembur * 15000);
    }
    
    public function getgajiPokok($gol){
       
        $daftarGaji = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];
        return isset ($daftarGaji[$gol]) ? $daftarGaji[$gol] : 0;
    }

    public function __destruct(){
        echo "Sistem: Objek data karyawan '{$this->namaKaryawan}' telah dihapus dari memori\n";
    }
}

// ==============================
// DATA AWAL
// ==============================
$daftarKaryawan = [];

$daftarKaryawan[] = new Karyawan("Winny", "IIb", 30);
$daftarKaryawan[] = new Karyawan("Stendy", "IIIc", 32);
$daftarKaryawan[] = new Karyawan("Alfred", "IVb", 30);


// ==============================
// MENU PROGRAM
// ==============================
do{
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih Menu: ";

    $menu = trim(fgets(STDIN));

    switch ($menu){
        case 1:
            echo "\n===== DATA GAJI KARYAWAN =====\n";
            echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";

            foreach ($daftarKaryawan as $key => $k){
                echo ($key + 1) . " | " . $k->namaKaryawan . " | " . $k->golongan . " | " . $k->jamLembur . " | Rp" . number_format($k->totalGaji, 0, ',', '.') . "\n";
            }
            break;
        case 2:
            echo "Nama: "; $n = trim(fgets(STDIN));
            echo "Golongan (Ib-IVd): "; $g = trim(fgets(STDIN));
            echo "Jam Lembur: "; $j = trim(fgets(STDIN));

            $daftarKaryawan[] = new Karyawan($n, $g, (int)$j);
            echo "Data berhasil ditambahkan!\n";
            break;

        case 3:
            echo "Masukkan Nomor Data yang akan di-update: ";
            $idx = trim(fgets(STDIN)) - 1;
            if (isset($daftarKaryawan[$idx])) {
                echo "Nama Baru: "; $n = trim(fgets(STDIN));
                echo "Golongan Baru: "; $g = trim(fgets(STDIN));
                echo "Jam Lembur Baru: "; $j = trim(fgets(STDIN));

                unset($daftarKaryawan[$idx]);
                $daftarKaryawan[$idx] = new Karyawan($n, $g, (int)$j);
                ksort($daftarKaryawan); // Mengurutkan index 
                echo "Data berhasil diperbarui!\n";
            } else{
                echo "Data tidak ditemukan\n";
            }
            break;

        case 4:
           echo "Masukkan Nomor Data yang akan dihapus: ";
            $idx = trim(fgets(STDIN)) - 1;
            if (isset($daftarKaryawan[$idx])) {
                unset($daftarKaryawan[$idx]); // Menghapus objek
                $daftarKaryawan = array_values($daftarKaryawan);
                echo "Data berhasil dihapus.\n"; 
            } else{
                echo "Data tidak ditemukan!\n";
            }
            break;

        case 5:
           echo "Program selesai. Terimakasih!\n";
            break;

        default:
            echo "Menu tidak valid.\n";
            break; 

    } 

}  while ($menu != 5);     


?>