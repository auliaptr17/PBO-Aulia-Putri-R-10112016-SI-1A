<?php
include('koneksi.php');

$action = $_GET['action'] ?? '';

if ($action == "login")
{
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    // CEK ADMIN
    $data = mysqli_query(
        $koneksi,
        "SELECT * FROM user
         WHERE username='$username'
         AND password='$password'"
    );

    // CEK CUSTOMER
    $data2 = mysqli_query(
        $koneksi,
        "SELECT * FROM tb_customer
         WHERE email_customer='$username'
         AND pass_customer='$password'"
    );

    // CEK SUPPLIER
    $data3 = mysqli_query(
        $koneksi,
        "SELECT * FROM tb_supplier
         WHERE email_supplier='$username'
         AND pass_supplier='$password'"
    );

    // HITUNG DATA
    $cek  = mysqli_num_rows($data);
    $cek2 = mysqli_num_rows($data2);
    $cek3 = mysqli_num_rows($data3);

    // LOGIN ADMIN
    if ($cek > 0)
    {
        $_SESSION['username']  = $username;
        $_SESSION['tipe_user'] = "Administrator";

        $tipe_user = $_SESSION['tipe_user'];

        echo "
        <script>
            alert('Login Berhasil! Selamat Datang - $tipe_user');
            window.location='../admin/index_admin.php';
        </script>
        ";
    }

    // LOGIN CUSTOMER
    else if ($cek2 > 0)
    {
        $_SESSION['username']  = $username;
        $_SESSION['tipe_user'] = "Customer";

        $tipe_user = $_SESSION['tipe_user'];

        echo "
        <script>
            alert('Login Berhasil! Selamat Datang - $tipe_user');
            window.location='../customer/index_customer.php';
        </script>
        ";
    }

    // LOGIN SUPPLIER
    else if ($cek3 > 0)
    {
        $_SESSION['username']  = $username;
        $_SESSION['tipe_user'] = "Supplier";

        $tipe_user = $_SESSION['tipe_user'];

        echo "
        <script>
            alert('Login Berhasil! Selamat Datang - $tipe_user');
            window.location='../supplier/index_supplier.php';
        </script>
        ";
    }

    // LOGIN GAGAL
    else
    {
        echo "
        <script>
            alert('Login Gagal Username atau Password Tidak Sesuai!');
            window.location='login.php';
        </script>
        ";
    }
}

// LOGOUT
else if ($action == "logout")
{
    session_start();

    unset($_SESSION['username']);
    session_unset();
    session_destroy();

    echo "
    <script>
        alert('Anda berhasil logout. Terimakasih');
        window.location='login.php';
    </script>
    ";
}

// ACTION TIDAK DITEMUKAN
else
{
    echo "
    <script>
        alert('Action tidak ditemukan!');
        window.location='login.php';
    </script>
    ";
}
?>