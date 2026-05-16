<?php

class Produk {
    public $namaProduk;
    public $harga;
    public $stok;

    //construct untuk inisialisasi objek saat dipanggil
    public function __construct($namaProduk, $harga, $stok){
        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function getInfo(){
        return "Produk: $this->namaProduk - Rp " . number_format($this->harga,0,",",".");
    }

    public function __destruct(){
        echo "Sistem: Produk '{$this->namaProduk}' telah dihapus\n";
    }
}

// ==============================
// DATA AWAL PRODUK
// ==============================
$daftarProduk = [];
$daftarProduk[] = new Produk("Album Seventeen", 500000, 150);
$daftarProduk[] = new Produk("Album NCT 127", 350000, 200);
$daftarProduk[] = new Produk("Album EXO", 200000, 100);

// ==============================
// MENU PROGRAM
// ==============================
do {
    echo "\n===== MENU TOKO =====\n";
    echo "1. Tampilkan Data Produk\n";
    echo "2. Tambah Produk\n";
    echo "3. Update Produk\n";
    echo "4. Hapus Produk\n";
    echo "5. Keluar\n";
    echo "Pilih menu : ";

    $menu = trim(fgets(STDIN));

    switch ($menu){
            case 1:
            echo "\n===== Tampilan Data Produk =====\n";
            echo "No | Nama Produk | Harga | Stok\n";
            echo "-------------------------------\n";
            foreach ($daftarProduk as $key => $p) {
                echo ($key + 1) . " | " . $p->namaProduk . " | " . number_format($p->harga, 0, ',', '.') . " | " . $p->stok . "\n";
            }
            break;

        case 2:
            //menu untuk menambahkan produk
            echo "\n--- Tambah Produk ---\n";
            echo "Masukkan nama produk : "; $n = trim(fgets(STDIN));
            echo "Masukkan harga       : "; $h = (int)trim(fgets(STDIN));
            echo "Masukkan stok        : "; $s = (int)trim(fgets(STDIN));

            $daftarProduk[] = new Produk($n, $h, $s);
            echo "Produk berhasil ditambahkan!\n";
            break;

        case 3:
            echo "\n--- Update Produk---\n";
            echo "Masukkan Nomor Produk yang akan di update: ";
            $idx = (int)trim(fgets(STDIN)) - 1;

            if (isset($daftarProduk[$idx])) {
                echo "(Input ulang:)\n";
                echo "Nama baru : "; $n = trim(fgets(STDIN));
                echo "Harga baru: "; $h = (int)trim(fgets(STDIN));
                echo "Stok baru : "; $s = (int)trim(fgets(STDIN));

                // mengupdate objek
                $daftarProduk[$idx] = new Produk($n, $h, $s);
                echo "Produk berhasil diperbarui!\n";
            } else {
                echo "Produk tidak ditemukan.\n";
            }
            break;

        case 4:
            echo "\n--- Hapus Produk ---\n";
            echo "Masukkan Nomor Produk yang akan dihapus: ";
            $idx = (int)trim(fgets(STDIN)) - 1;

            if (isset($daftarProduk[$idx])) {
                unset($daftarProduk[$idx]);
                $daftarProduk = array_values($daftarProduk);
            } else {
                echo "Nomor produk tidak ditemukan.\n";
            }
            break;

        case 5:
            echo "Program selesai, Terima kasih!\n";
            break;

        default:
            echo "Menu tidak tersedia.\n";
            break;
    }

} while ($menu != 5);

?>

