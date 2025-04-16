<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion shadow-lg" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center py-3" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-atlas fa-lg"></i>
      </div>
      <div class="sidebar-brand-text mx-3 font-weight-bold">Pengaduan</div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($title === "Dashboard") echo "active"; ?>">
      <a class="nav-link" href="../petugas/dashboard.php">
        <i class="fas fa-user-tie"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
      Fitur
    </div>

    <li class="nav-item <?php if ($title === "Laporan Masyarakat") echo "active"; ?>">
      <a class="nav-link" href="../petugas/laporan.php">
        <i class="fas fa-book-open"></i>
        <span>Laporan Masyarakat</span>
      </a>
    </li>

    <li class="nav-item <?php if ($title === "Laporan Terverifikasi") echo "active"; ?>">
      <a class="nav-link" href="../petugas/terverify.php">
        <i class="fas fa-check-circle"></i>
        <span>Laporan Terverifikasi</span>
      </a>
    </li>

    <li class="nav-item <?php if ($title === "Tanggapan") echo "active"; ?>">
      <a class="nav-link" href="../petugas/tanggapan.php">
        <i class="fas fa-bookmark"></i>
        <span>Tanggapan</span>
      </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0 bg-light" id="sidebarToggle"></button>
    </div>
  </ul>
  <!-- End of Sidebar -->
  <style>
.sidebar .nav-item:hover {
  background-color: rgba(255, 255, 255, 0.1);
  transition: 0.3s;
}
.sidebar .nav-link span {
  font-size: 0.95rem;
}
</style>

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow-sm border-bottom">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-light d-md-none rounded-circle mr-2">
          <i class="fa fa-bars"></i>
        </button>

        <h3 class="text-gray-800 ml-3 font-weight-bold mb-0"><?= $title; ?></h3>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Logout -->
          <li class="nav-item dropdown no-arrow">
            <a href="../petugas/login.php" class="btn btn-outline-danger shadow-sm">
              <i class="fas fa-sign-out-alt mr-1"></i> Logout
            </a>
          </li>
        </ul>
      </nav>
      <!-- End of Topbar -->

      <div class="container">
