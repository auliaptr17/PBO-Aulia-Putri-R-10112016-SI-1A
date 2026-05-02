<?php

class manusia{
    //properties
    private $nama = "Ardi";
    private $kelas = "SI 2";

    private function m_nama(){
        return $this->nama;
    }

    public function tampilkan_nama(){
        return $this->m_nama();
    }

    function tampilkan_kelas(){
        return $this->kelas;
    }
}
//instansiasi
$manusia = new manusia();

//memanggil method tampilkan nama dari class manusia
echo "Nama : ".$manusia->tampilkan_nama(). "<br />";
echo "Kelas : ".$manusia->tampilkan_kelas();