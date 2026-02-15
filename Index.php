<?php
require_once "Suhu.php"; //memanggil class suhu

$hasil = ""; //variable hasil 

if(isset($_POST['hitung'])){

    //mengambil nilai dari form
    $nilai  = $_POST['nilai'];
    $satuan = $_POST['satuan']; 

    //object dari class suhu
    $obj = new Suhu($nilai, $satuan);
    $hasil = $obj->convert();
}
?>

<head>
    <title> Kalkulator Suhu</title>
</head>
<body>

<h2> Kalkulator Konversi Suhu</h2>

<!-- Form input suhu-->
<form method="POST">
    <input type="number" name="nilai" required> <!--input angka suhu-->

    <!--dropdown satuan suhu-->
    <select name="satuan">
    <option value="C">Celsius</option>
    <option value="F">Fahrenheit</option>
    <option value="K">Kelvin</option>
    <option value="R">Reamur</option>
</select>

 <!--tombol untuk submit-->
    <button type="submit" name="hitung">Konversi</button>
</form>
 <!--menampilkan hasil konversi suhu-->
<div>
    <?php echo $hasil; ?>
</div>
