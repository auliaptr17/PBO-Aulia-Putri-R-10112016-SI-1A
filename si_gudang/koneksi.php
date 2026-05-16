<?php

//exeption menampilkan pesan error
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "si_gudang";

try { //untuk mengatasi error sehingga program tidak mengalami crash
    $koneksi = mysqli_connect($host, $username, $password, $database); //membuka koneksi baru ke server MYSQL
} catch (mysqli_sql_exception $e) {
    // Menampilkan pesan error jika gagal terkoneksi
    die("Koneksi database gagal: " . $e->getMessage());
}
?>