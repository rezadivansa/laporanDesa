<?php

$title = 'Dashboard';


require '../layouts/header.php';

require '../layouts/navUser.php';

?>


<div class="row py-5">
  <div class="col-6 py-5 mt-3">
    <div class="desc ml-5">
      <h2 class="text-gray-800" data-aos="fade-down">Selamat datang di website pengaduan masyarakat</h2>
      <p data-aos="fade-down">laporan dan keluhan masyarakat desa berbasis website.</p>
      <a href="buatLaporan.php" class="btn btn-primary shadow" data-aos="fade-up">Buat Laporan</a>
      <a href="lihatLaporan.php" class="btn btn-outline-primary ml-2" data-aos="fade-up" data-aos-duration="500">Lihat Laporan</a>
    </div>
  </div>
  <div class="col-6">
    <div class="image" data-aos="fade-left">
      <img src="https://1.bp.blogspot.com/-abwQtOgYBj4/YBqckpdWp_I/AAAAAAAAH4M/j-ej8czQ_QUhCd-E8BHt9_4dxuPcDUHvACLcBGAsYHQ/s856/logo-surabaya.png" width="250" alt="">
    </div>
  </div>
</div>



<?php require '../layouts/footer.php'; ?>