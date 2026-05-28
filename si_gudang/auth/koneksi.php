<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_inventory";

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$koneksi){
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>