<?php

class TagihanListrik{

    private $nama;
    private $kwh;
    private $tarif = 1500; //per kwh

    public function setData($nama, $kwh){
        $this->nama = $nama;
        $this->kwh = $kwh;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getKWH(){
        return $this->kwh;
    }

    public function hitungTotal(){

    $total =$this->kwh * $this->tarif;

    //diskon jika pemakaian besar
    if($this->kwh > 1000){
            $total -= 50000;
        }

        return $total;
    } 
}

