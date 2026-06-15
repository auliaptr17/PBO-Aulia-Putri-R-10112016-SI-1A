<?php
include 'koneksi.php';

if (isset($_POST['nama_customer'])) {

    $nama    = $_POST['nama_customer'];
    $alamat  = $_POST['alamat_customer'];
    $telepon = $_POST['telepon_customer'];

    $id_customer = "CUST-" . rand(1000, 9999);

    $query = "INSERT INTO tb_customer (id_customer, nama_customer, alamat_customer, telepon_customer) 
              VALUES ('$id_customer', '$nama', '$alamat', '$telepon')";

    if (mysqli_query($koneksi, $query)) {
        // Jika sukses, arahkan ke halaman utama customer
        header("location:customer.php");
    } else {
        echo "Gagal menyimpan data ke database: " . mysqli_error($koneksi);
    }

} else {
    header("location:input_customer.php");
}
?>
