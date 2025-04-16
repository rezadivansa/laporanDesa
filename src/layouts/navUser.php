<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark" id="accordionSidebar" style="background: linear-gradient(135deg, #4CA1AF, #C4E0E5);">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
            <div class="sidebar-brand-icon rotate-n-20">
                <img src="https://tse2.mm.bing.net/th?id=OIP.XJAw940HdNuw_pwX2QUYVQHaKb&pid=Api&P=0&h=220" alt="Logo" width="1000" class="img-fluid">
            </div>
            <div class="sidebar-brand-text mx-3">E-Pengaduan</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Dashboard -->
        <li class="nav-item <?= $title === "Dashboard" ? "active" : ""; ?>">
            <a class="nav-link" href="../user/dashboard.php">
                <i class="fas fa-home"></i>
                <span>Beranda</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading" style="color: #003D5B;">
            Menu Utama
        </div>

        <!-- Buat Laporan -->
        <li class="nav-item <?= $title === "Buat Laporan" ? "active" : ""; ?>">
            <a class="nav-link" href="../user/buatLaporan.php">
                <i class="fas fa-file-signature"></i>
                <span>Kirim Laporan</span>
            </a>
        </li>

        <!-- Laporan -->
        <li class="nav-item <?= $title === "Laporan" ? "active" : ""; ?>">
            <a class="nav-link" href="../user/lihatLaporan.php">
                <i class="fas fa-folder"></i>
                <span>Data Laporan</span>
            </a>
        </li>

        <!-- Tanggapan -->
        <li class="nav-item <?= $title === "Tanggapan" ? "active" : ""; ?>">
            <a class="nav-link" href="../user/tanggapan.php">
                <i class="fas fa-comment-dots"></i>
                <span>Tanggapan</span>
            </a>
        </li>

        <!-- Generate Laporan -->
        <li class="nav-item <?= $title === "Generate Laporan" ? "active" : ""; ?>">
            <a class="nav-link" href="../user/generate.php">
                <i class="fas fa-file-export"></i>
                <span>Export Laporan</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
                style="background: linear-gradient(to right, #C4E0E5, #E0F7FA);">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Page Title -->
                <h3 class="text-gray-800 ml-3 my-auto"><?= $title; ?></h3>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- User Info -->
                    <li class="nav-item dropdown no-arrow">
                        <a href="../user/" class="btn btn-outline-danger">Logout</a>
                    </li>
                </ul>
            </nav>
            
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container">
