 <nav class="sidebar-nav scroll-sidebar" data-simplebar>
  <ul id="sidebarnav">
    <!-- ============================= -->
    <!-- Home -->
    <!-- ============================= -->
    <li class="nav-small-cap">
      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
      <span class="hide-menu">Menu Aplikasi</span>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link sidebar-link" href="<?php echo base_url() ?>" aria-expanded="false">
        <span class="rounded-3">
          <i class="ti ti-home"></i>
        </span>
        <span class="hide-menu"> Dashboard</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
        <span class="d-flex">
          <i class="ti ti-users"></i>
        </span>
        <span class="hide-menu">Master</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="<?php echo base_url() ?>kelas" class="sidebar-link">
            <div class="round-16 d-flex align-items-center justify-content-center">
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Kelas</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a  href="<?php echo base_url() ?>siswa" class="sidebar-link">
            <div class="round-16 d-flex align-items-center justify-content-center">
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Siswa</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
        <span class="d-flex">
          <i class="ti ti-calendar"></i>
        </span>
        <span class="hide-menu">Absensi</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="<?php echo base_url() ?>absensi_masuk" class="sidebar-link">
            <div class="round-16 d-flex align-items-center justify-content-center">
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Masuk</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a  href="<?php echo base_url() ?>absensi_pulang" class="sidebar-link">
            <div class="round-16 d-flex align-items-center justify-content-center">
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Pulang</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a  href="<?php echo base_url() ?>laporan" class="sidebar-link">
            <div class="round-16 d-flex align-items-center justify-content-center">
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Laporan</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
        <span class="d-flex">
          <i class="ti ti-book"></i>
        </span>
        <span class="hide-menu">Perpustakaan</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
       <li class="sidebar-item">
        <a href="<?php echo base_url() ?>kunjungan" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Kunjungan</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a href="<?php echo base_url() ?>buku" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Buku</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a  href="<?php echo base_url() ?>pinjam" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Peminjaman</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a  href="<?php echo base_url() ?>denda" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Denda</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a href="<?php echo base_url() ?>laporan_kunjungan" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Laporan</span>
        </a>
      </li>
    </ul>
  </li>
  <li class="sidebar-item">
    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
      <span class="d-flex">
        <i class="ti ti-shopping-cart"></i>
      </span>
      <span class="hide-menu">Kantin Digital</span>
    </a>
    <ul aria-expanded="false" class="collapse first-level">
      <li class="sidebar-item">
        <a href="<?php echo base_url() ?>saldo" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Saldo</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a  href="<?php echo base_url() ?>kantin" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Kantin</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a  href="<?php echo base_url() ?>produk" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Produk</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a  href="<?php echo base_url() ?>transaksi" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">transaksi</span>
        </a>
      </li>
    </ul>
  </li>
  <li class="sidebar-item">
    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
      <span class="d-flex">
        <i class="ti ti-building-bank"></i>
      </span>
      <span class="hide-menu">Tabungan Digital</span>
    </a>
    <ul aria-expanded="false" class="collapse first-level">
      <li class="sidebar-item">
        <a href="<?php echo base_url() ?>tabungan_saldo" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Saldo</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a  href="<?php echo base_url() ?>tabungan_transaksi" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">transaksi</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a  href="<?php echo base_url() ?>laporan_transaksi" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Laporan</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="sidebar-item">
    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
      <span class="d-flex">
        <i class="ti ti-settings"></i>
      </span>
      <span class="hide-menu">Setting</span>
    </a>
    <ul aria-expanded="false" class="collapse first-level">
      <li class="sidebar-item">
        <a href="<?php echo base_url() ?>tabungan_saldo" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Pengguna</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a  href="<?php echo base_url() ?>tabungan_transaksi" class="sidebar-link">
          <div class="round-16 d-flex align-items-center justify-content-center">
            <i class="ti ti-circle"></i>
          </div>
          <span class="hide-menu">Hak Akses</span>
        </a>
      </li>
    </ul>
  </li>
  
  <li class="sidebar-item">
    <a class="sidebar-link sidebar-link" href="<?php echo base_url() ?>logout" aria-expanded="false">
      <span class="rounded-3">
        <i class="ti ti-logout"></i>
      </span>
      <span class="hide-menu"> Logout</span>
    </a>
  </li>
</ul>
<div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
  <div class="d-flex">
    <div class="unlimited-access-title">
      <h6 class="fw-semibold fs-4 mb-6 text-dark w-85" style="color: orange">MIN1Jombang #GoDigital</h6>
      <!-- <button class="btn btn-primary fs-2 fw-semibold lh-sm">Homepage</button> -->
    </div>
    <div class="unlimited-access-img">
      <img src="<?php echo base_url(); ?>dist/images/backgrounds/rocket.png" style="width: 100%" alt="" class="img-fluid">
    </div>
  </div>
</div>
</nav>