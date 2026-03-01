<?php

class DataMahasiswa{
    public $namaMahasiswa;
    public $kelas;
    public $mataKuliah;
    public $nilaiKuis;

    //constructor
    public function __construct ($namaMahasiswa, $kelas, $mataKuliah, $nilaiKuis){
        $this->namaMahasiswa = $namaMahasiswa;
        $this->kelas = $kelas;
        $this->mataKuliah = $mataKuliah;
        $this->nilaiKuis = $nilaiKuis;
    }
    //method untuk keterangan lulus
    public function statusKelulusan(){
        if($this->nilaiKuis >= 70){
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }
    //method untuk menampilkan data 
    public function tampilData(){
        echo "Nama Mahasiswa : " . $this->namaMahasiswa . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
        echo "Mata Kuliah : " . $this->mataKuliah . "<br>";
        echo "Nilai Kuis : " . $this->nilaiKuis. "<br>";
        echo $this->statusKelulusan();
        echo "<hr>";
    }
   
}

 $dataMahasiswa = [
        ["Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80],
        ["Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75],
        ["Ineu", "SI 2", "Pemrograman Berorientasi Objek", 55]
    ];

foreach ($dataMahasiswa as $data){
    $datamahasiswa = new datamahasiswa($data[0], $data[1], $data[2], $data[3]);
    $datamahasiswa->tampilData();
}

?>