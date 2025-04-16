<?php
$title = 'Beranda';

require '../../public/app.php';
require '../layouts/header.php';
require '../layouts/navAdmin.php';

// Ambil data terakhir dari masing-masing tabel
$pengaduan = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id_pengaduan DESC LIMIT 1");
$tanggapan = mysqli_query($conn, "SELECT * FROM tanggapan ORDER BY id_tanggapan DESC LIMIT 1");
$masyarakat = mysqli_query($conn, "SELECT COUNT(*) as total FROM masyarakat");

// Query gabungan untuk data laporan
$query = "SELECT * FROM (( tanggapan 
            INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan )
            INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas )";
$result = mysqli_query($conn, $query);
?>

<!-- Ringkasan Info -->
<div class="row mb-4">
  <?php while ($row = mysqli_fetch_assoc($pengaduan)) : ?>
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="300">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body d-flex align-items-center">
          <div class="mr-3">
            <i class="fas fa-comment fa-2x text-info"></i>
          </div>
          <div>
            <div class="h5 font-weight-bold text-info"><?= $row['id_pengaduan']; ?> Pengaduan</div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

  <?php while ($row = mysqli_fetch_assoc($tanggapan)) : ?>
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="500">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body d-flex align-items-center">
          <div class="mr-3">
            <i class="fas fa-comments fa-2x text-primary"></i>
          </div>
          <div>
            <div class="h5 font-weight-bold text-primary"><?= $row['id_tanggapan']; ?> Tanggapan</div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

  <?php while ($row = mysqli_fetch_assoc($masyarakat)) : ?>
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="700">
      <div class="card border-left-dark shadow h-100 py-2">
        <div class="card-body d-flex align-items-center">
          <div class="mr-3">
            <i class="fas fa-users fa-2x text-dark"></i>
          </div>
          <div>
            <div class="h5 font-weight-bold text-dark"><?= $row['total']; ?> Akun Masyarakat</div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>

<!-- Laporan dan Tanggapan -->
<div class="row">
  <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="col-md-6 mb-4">
      <div class="card shadow" data-aos="fade-up">
        <div class="card-header">
          <div class="row">
            <div class="col-6">
              <h6 class="m-0 font-weight-bold text-primary">NIK: <?= $row['nik']; ?></h6>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-4">
              <strong>Foto:</strong><br>
              <img src="../../assets/img/img-buat-laporan.svg" width="60" alt="">
            </div>
            <div class="col-8">
              <p><strong class="text-primary">Tanggal Pengaduan:</strong> <?= $row['tgl_pengaduan']; ?></p>
              <p><strong class="text-primary">Tanggal Tanggapan:</strong> <?= $row['tgl_tanggapan']; ?></p>
            </div>
          </div>
          <hr>
          <p><strong class="text-primary">Laporan:</strong> <?= $row['isi_laporan']; ?></p>
          <p><strong class="text-primary">Tanggapan:</strong> <?= $row['tanggapan']; ?></p>
          <hr>
          <div class="d-flex justify-content-between align-items-center">
            <h6><strong class="text-primary">Ditanggapi oleh:</strong> <?= $row['nama_petugas']; ?></h6>
            <a href="preview.php?id_tanggapan=<?= $row['id_tanggapan']; ?>" class="btn btn-outline-primary btn-sm">Preview</a>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>

<?php require '../layouts/footer.php'; ?>
