<?php
session_start();
// Jika session username belum ada, lempar kembali ke login
if (!isset($_SESSION['username'])) {
    echo "<script>
            alert('Anda harus login terlebih dahulu!');
            window.location='login.php';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Halaman <?php echo $_SESSION['tipe_user'] ?? 'Guest'; ?>
    </title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/templates/spica/template/vendors/mdi/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="../assets/templates/spica/template/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="../assets/templates/spica/template/css/style.css">

    <link rel="shortcut icon" href="../assets/templates/spica/template/images/favicon.png" />

</head>

<body>

    <div class="container-scroller d-flex">

        <!-- <div class="row p-0 m-0 proBanner" id="proBanner">

            <div class="col-md-12 p-0 m-0">

                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

                    <div class="ps-lg-1">

                    </div>

                </div>

            </div>

        </div> -->

        <!-- Sidebar -->
        <?php include('navbar.php'); ?>

        <!-- Main Panel -->
        <?php include('main_panel.php'); ?>

    </div>

    <!-- JS -->
    <script src="../assets/templates/spica/template/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/templates/spica/template/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/templates/spica/template/js/jquery.cookie.js"></script>
    <script src="../assets/templates/spica/template/js/off-canvas.js"></script>
    <script src="../assets/templates/spica/template/js/hoverable-collapse.js"></script>
    <script src="../assets/templates/spica/template/js/template.js"></script>
    <script src="../assets/templates/spica/template/js/dashboard.js"></script>

</body>

</html>