<?php

class manusia{
    //menentukan properties dengan protected
    protected $nama = "Ardi";
    var $kelas = "SI 2";

    protected function nama(){
        return "Nama : " .$this->nama;
    }

    public function tampilkan_nama(){
        return $this->nama();
    }

    protected function tampilkan_kelas(){
        return "Kelas : " .$this->kelas;
    }
}
//instansiasi class manusia 
$manusia = new manusia();

//memanggil method public tampilkan nama dari class manusia
echo $manusia->tampilkan_nama(). "<br />";
echo $manusia->tampilkan_kelas();
?>