<?php

$title = 'Dashboard';

require '../layouts/header.php';

require '../layouts/navPetugas.php';

?>


<div class="d-flex justify-content-center text-center py-5" data-aos="zoom-in">
  <div class="">
    <i class="fas fa-atlas fa-5x mb-2"></i>
    <h1 class="mb-3">SELAMAT DATANG <span class="text-primary">Pengaduan</span> web <br>
      <span class="text-primary"> Selamat beraktivitas </span>have fun.
    </h1>
    <a href="laporan.php" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-book-open"></i>
      </span>
      <span class="text">Lihat Laporan</span>
    </a>
  </div>
</div>



<?php require '../layouts/footer.php'; ?>