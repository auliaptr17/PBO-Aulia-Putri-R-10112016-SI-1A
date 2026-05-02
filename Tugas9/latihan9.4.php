<?php

class komputer{

    //properties hak akses protected
    protected $jenis_processor = "Intel Core i7-4790 3.6Ghz";
    protected $jenis_RAM = "DDR 4";
    public $jenis_VGA = "PCI Express";

    public function tampilkan_processor(){
    return $this->jenis_processor;
    }

    public function tampilkan_jenisprocessor(){
    return $this->jenis_processor;
    }

    protected function tampilkan_RAM(){
    return $this->jenis_RAM;
    }

    protected function tampilkan_VGA(){
    return $this->jenis_VGA;
    }

    public function tampilkan_VGA2(){
    return $this->jenis_VGA;
    }

}

//class turunan
class laptop extends komputer{

    public function display_processor(){
    return $this->jenis_processor;
    }

    public function display_processor2(){
    return $this->tampilkan_processor();
    }

    public function display_RAM(){
    return $this->jenis_RAM;
    }

    public function display_RAM2(){
    return $this->tampilkan_RAM();
    }

    public function display_VGA(){
    return $this->tampilkan_VGA2();
    }

    public function display_processorkomputer(){
    return $this->jenis_processor;
    }

}

//instansiasi objek class laptop
$komputer = new komputer();
$laptop = new laptop();

//tampilkan method class komputer
echo "Line 61: ".$komputer->tampilkan_processor()."<br />";
echo "Line 62: ".$laptop->display_processor()."<br />";
echo "Line 63: ".$laptop->display_processor2()."<br />";
echo "Line 64: ".$laptop->tampilkan_jenisprocessor()."<br />";
echo "Line 65: ".$laptop->display_RAM()."<br />";
echo "Line 66: ".$laptop->display_VGA()."<br />";
echo "Line 67: ".$laptop->display_processorkomputer()."<br />";
?>