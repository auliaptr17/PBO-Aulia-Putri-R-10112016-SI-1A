<?php

class Tabungan{
    
    protected $nama;
    protected $kelas;
    private $saldo;

    public function __construct ($nama, $kelas, $saldoAwal){
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->saldo = $saldoAwal;
    }

    //method untuk mengakses saldo
    public function getSaldo(){
        return $this->saldo;
    }

    //method untuk menambah saldo
    public function setorTunai($jumlah){
        if ($jumlah > 0){
            $this->saldo += $jumlah;
            return true;
        }
        return false;
    }

    //method untuk mengurangi saldo
    public function tarikTunai($jumlah){
        if ($jumlah > 0 && $this->saldo >= $jumlah){
            $this->saldo -= $jumlah;
            return true;
        }
        return false;
    }

    public function getNama(){
        return $this->nama;
    }
}

class siswa1 extends Tabungan{}
class siswa2 extends Tabungan{}
class siswa3 extends Tabungan{}

// ==============================
// DATA AWAL
// ==============================
$daftarSiswa = [
    1 => new siswa1("Wonwoo", "XII-IPA", 500000),
    2 => new Siswa2("Seungcheol", "XII-IPS", 750000),
    3 => new Siswa3("Seungkwan", "XI-Bahasa", 300000)
];

$input = fopen("php://stdin", "r");

// ==============================
// MENU PROGRAM
// ==============================
do {
    echo "\n====================================\n";
    echo " SISTEM TABUNGAN SEKOLAH \n";
    echo "\n====================================\n";
    echo "Daftar Saldo Awal Siswa : \n";

    //struktur perulangan 
    foreach ($daftarSiswa as $d => $s) {
    echo "$d. {$s->getNama()} | Saldo: Rp " . number_format($s->getSaldo(), 0, ",", ".") . "\n";
    }
    
    echo "------------------------------------\n";
    echo "Menu Utama:\n";
    echo "1. Setor Tunai\n";
    echo "2. Tarik Tunai\n";
    echo "3. Keluar\n";
    echo "Pilih Menu: ";

    $menu = trim(fgets($input));

    if ($menu == 1 || $menu == 2){
        echo "Pilih Siswa (1-3): ";
        $noSiswa = (int)trim(fgets($input));

        if (isset($daftarSiswa[$noSiswa])) {
            $siswaAktif = $daftarSiswa[$noSiswa];
            
            if ($menu == 1) {
                echo "Masukkan jumlah setor untuk {$siswaAktif->getNama()}: ";
                $jumlah = (int)trim(fgets($input));
                if ($siswaAktif->setorTunai($jumlah)) {
                    echo "Berhasil! Saldo saat ini {$siswaAktif->getNama()}: Rp " . number_format($siswaAktif->getSaldo(), 0, ',', '.') . "\n";
                } else {
                    echo "Gagal: Jumlah setor tidak valid.\n";
                }
            } else {
                echo "Masukkan jumlah tarik untuk {$siswaAktif->getNama()}: ";
                $jumlah = (int)trim(fgets($input));
                if ($siswaAktif->tarikTunai($jumlah)) {
                    echo "Berhasil! Sisa saldo {$siswaAktif->getNama()}: Rp " . number_format($siswaAktif->getSaldo(), 0, ',', '.') . "\n";
                } else {
                    echo "Gagal: Saldo tidak mencukupi.\n";
                }
            }
        } else {
            echo "Error: Siswa tidak ditemukan!\n";
        }
    } elseif ($menu == 3) {
        echo "Terima kasih telah menggunakan sistem tabungan.\n";
    } else {
        echo "Menu tidak tersedia.\n";
    }
}while ($menu != 3);

fclose($input);
?>
