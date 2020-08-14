<?php
	session_start();
	?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../dist/img/tzuchi.png" alt="Tzu Chi Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Tzu Chi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block" style="text-transform:uppercase;"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php
          if($_SESSION['level'] == "admin"){
          ?>
          <!-- SISWA Menu -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                SISWA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="siswa/index.php?halaman=Index Siswa&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="siswa/data_siswa.php?halaman=Data Siswa&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="siswa/add_siswa.php?halaman=Tambah Data Siswa&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Siswa</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- PETUGAS Menu -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                PETUGAS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="petugas?halaman=Index Petugas&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index Petugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="petugas/data_petugas.php?halaman=Data Petugas&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Petugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="petugas/add_petugas.php?halaman=Tambah Data Petugas&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Petugas</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- KELAS Menu -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                KELAS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kelas/index.php?halaman=Index Kelas&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kelas/data_kelas.php?halaman=Data Kelas&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelas Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kelas/add_kelas.php?halaman=Tambah Data Kelas&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kelas</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- SPP Menu -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                SPP 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="spp/index.php?halaman=Index SPP&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index SPP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="spp/data_spp.php?halaman=Data SPP&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPP Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="spp/add_spp.php?halaman=Tambah Data SPP&dari=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
          <li class="nav-header">TRANSAKSI</li>
          <?php
            if($_SESSION['level'] != "siswa"){
          ?>
          <li class="nav-item">
            <a href="transaksi/entri_transaksi.php?halaman=Entri Transaksi Pembayaran&dari=admin" class="nav-link">
              <i class="nav-icon fas fa-file-signature"></i>
              <p>
                Entri Transaksi
              </p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a href="transaksi/history_transaksi.php?halaman=History Transaksi Pembayaran&dari=admin" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                History Pembayaran
              </p>
            </a>
          </li>
          <?php
            if($_SESSION['level'] == "admin"){
          ?>
          <li class="nav-item">
            <a href="transaksi/generate_transaksi.php?halaman=Generate Transaksi Pembayaran&dari=admin" class="nav-link">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Generate Pembayaran
              </p>
            </a>
          </li>
            <?php } ?>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside>