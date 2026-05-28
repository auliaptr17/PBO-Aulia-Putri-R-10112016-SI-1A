<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">

        <li class="nav-item sidebar-category">
            <p>Navigasi</p>
            <span></span>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="index_admin.php">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item sidebar-category">
            <p>Components</p>
            <span></span>
        </li>

        <!-- Kelola Data -->
        <li class="nav-item">
            <a class="nav-link"
               data-bs-toggle="collapse"
               href="#ui-basic"
               aria-expanded="false"
               aria-controls="ui-basic">

                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Kelola Data</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="ui-basic">

                <ul class="nav flex-column sub-menu">

                    <li class="nav-item">
                        <a class="nav-link" href="data_barang.php">
                            Data Barang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="data_customer.php">
                            Data Customer
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="data_supplier.php">
                            Data Supplier
                        </a>
                    </li>

                </ul>

            </div>
        </li>

        <!-- Transaksi -->
        <li class="nav-item">

            <a class="nav-link"
               data-bs-toggle="collapse"
               href="#transaksi"
               aria-expanded="false"
               aria-controls="transaksi">

                <i class="mdi mdi-file-document menu-icon"></i>
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="transaksi">

                <ul class="nav flex-column sub-menu">

                    <li class="nav-item">
                        <a class="nav-link" href="transaksi_penjualan.php">
                            Transaksi Penjualan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="transaksi_pembelian.php">
                            Transaksi Pembelian
                        </a>
                    </li>

                </ul>

            </div>

        </li>

        <!-- Laporan -->
        <li class="nav-item">

            <a class="nav-link"
               data-bs-toggle="collapse"
               href="#laporan"
               aria-expanded="false"
               aria-controls="laporan">

                <i class="mdi mdi-file-chart menu-icon"></i>
                <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="laporan">

                <ul class="nav flex-column sub-menu">

                    <li class="nav-item">
                        <a class="nav-link" href="laporan_penjualan.php">
                            Laporan Penjualan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="laporan_pembelian.php">
                            Laporan Pembelian
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="laporan_data_customer.php">
                            Laporan Data Customer
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="laporan_data_supplier.php">
                            Laporan Data Supplier
                        </a>
                    </li>

                </ul>

            </div>

        </li>

    </ul>

</nav>