<?php

class manusia{

var $nama;
var $warna;

    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }

    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }

    function tampilkanNama(){
        return "Nama saya mahasiswa SI <br/>";
    }
}

//instansiasi objek
$manusia =  new manusia();
echo $manusia->tampilkanNama(); //memanggil method dari class manusia

?>