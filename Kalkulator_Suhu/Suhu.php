<?php

class Suhu {//ini adalah class kalkulator suhu

//instance variable
public $nilai; //menyimpan nilai suhu
public $satuan; //menyimpan satuan suhu 

//local variable
public function __construct ($nilai, $satuan){ //method 
    $this->nilai = $nilai;
    $this->satuan = $satuan;
}

public function convert(){ //konversi satuan suhu
   if($this->satuan == "C"){
    return $this->Celsius();
    } elseif($this->satuan == "F"){
    return $this->Fahrenheit();
    } elseif($this->satuan == "K"){
    return $this->Kelvin();
    } elseif($this->satuan == "R"){
    return $this->Reamur();
    } else {
    return "Satuan tidak valid!";
    }
} 
    
public function Celsius(){ //menampilkan konversi suhu dari celsius
    $c = $this->nilai;
    $f = ($c * 9/5) + 32;
    $k = $c + 273.15;
    $r = $c * 4/5;

    return "Hasil dari Celsius:
    <br>Fahrenheit = ".round($f,2)."
    <br>Kelvin = ".round($k,2)."
    <br>Reamur = ".round($r,2);
}

public function Fahrenheit(){ //menampilkan konversi suhu dari Fahrenheit
    $c = ($this->nilai - 32) * 5/9;
    $f = $this->nilai;
    $k = $c + 273.15;
    $r = $c * 4/5;

    return "Hasil dari Fahrenheit:
    <br>Celsius = ".round($c,2)."
    <br>Kelvin = ".round($k,2)."
    <br>Reamur = ".round($r,2);
}

public function Kelvin(){ //menampilkan konversi suhu dari Kelvin
    $c = $this->nilai - 273.15;
    $f = ($c * 9/5) + 32;
    $k = $this->nilai;
    $r = $c * 4/5;

    return "Hasil dari Kelvin:
    <br>Celsius = ".round($c,2)."
    <br>Fahrenheit = ".round($f,2)."
    <br>Reamur = ".round($r,2);
}

public function Reamur(){ //menampilkan konversi suhu dari Reamur
    $c = $this->nilai * 5/4;
    $f = ($c * 9/5) + 32;
    $k = $c + 273.15;
    $r = $this->nilai;

    return "Hasil dari Reamur:
    <br>Celsius = ".round($c,2)."
    <br>Fahrenheit = ".round($f,2)."
    <br>Kelvin = ".round($k,2);
}
}  

?>
