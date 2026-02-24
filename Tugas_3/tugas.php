<?php
class PegadaianSyariah { //ini adalah class Angsuran
   
//instance class
    public $besarPinjaman;
    public $besarBunga;
    public $lamaAngsuran;
    public $terlambat;
    
    public $totalPinjaman;
    public $besarAngsuran;
    public $besarDenda;
    public $totalBayar;

    const Denda_Perhari = 0.00015; //0.15%

    //local variable
    public function __construct($besarPinjaman, $besarBunga, $lamaAngsuran, $terlambat){
       $this->pinjaman = $besarPinjaman;
       $this->bunga = $besarBunga;
       $this->lamaAngsuran = $lamaAngsuran;
       $this->terlambat = $terlambat;

       $this->hitung();
    }
    
    public function hitung() {
    $this->totalPinjaman = $this->pinjaman + //pinjaman + bunga
    ($this->pinjaman * $this->besarBunga / 100);

    $this->besarAngsuran = $this->totalPinjaman / $this->lamaAngsuran; //angsuran perbulan
    $this->besarDenda = $this->besarAngsuran * self:: Denda_Perhari * $this->terlambat; //denda terlambat
    $this->totalBayar = $this->besarAngsuran + $this->besarDenda; //total bayar bulan ini 
    }

public function getTotalPinjaman(){
    return $this->totalPinjaman;
}
public function getAngsuran(){
    return $this->besarAngsuran;
}
 public function getDenda(){
    return $this->besarDenda;
 }
 
 public function getTotalBayar(){
    return $this->totalBayar;
 }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pegadaian Syariah</title>
</head>
<body>
    <h2>Program Hitung Besaran Angsuran Hutang</h2>

<form method="post">
    Besar Pinjaman (Rp) : <input type="number" name="pinjaman" required><br><br>
    Masukan Besar Bunga (%) : <input type="number" name="bunga" required><br><br>
    Lama Angsuran (bulan) : <input type="number" name="lama" required><br><br>
    Keterlambatan Angsuran (hari) : <input type="number" name="terlambat" required><br><br>
    <button type="submit" name="hitung">hitung</button>
</form>


<?php
if(isset($_POST['hitung'])){
    $pinjaman = $_POST['pinjaman'];
    $bunga = $_POST['bunga'];
    $lama = $_POST['lama'];
    $terlambat = $_POST['terlambat'];

    $obj = new PegadaianSyariah($pinjaman, $bunga, $lama, $terlambat);

    echo "<hr>";
    echo "Total Pinjaman : Rp. " . number_format($obj->getTotalPinjaman(),0,",",".");
    echo "<br>Besar Angsuran : Rp. " . number_format($obj->getAngsuran(),0,",",".");
    echo "<br>Denda Keterlambatan : Rp. " . number_format($obj->getDenda(),0,",",".");
    echo "<br>Total Pembayaran : Rp. " . number_format($obj->getTotalBayar(),0,",",".");
}
?>

</body>
</html>

