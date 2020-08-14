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
              <?php
              error_reporting(0);
                if($_GET['dari'] == "siswa"){
                  echo "
                    <li class=nav-item>
                      <a href='index.php?halaman=Index Data Siswa&dari=siswa' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "generate"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa?halaman=Index Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "histori"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa?halaman=Index Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "spp"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa?halaman=Index Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "kelas"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa?halaman=Index Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "petugas"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa?halaman=Index Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "admin"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa?halaman=Index Siswa&dari=siswa' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Siswa</p>
                      </a>
                    </li>
                  ";
                }
              ?>
              <!-- SISWA DATA -->
              <?php
                if($_GET['dari'] == "siswa"){
                  echo "
                    <li class=nav-item>
                      <a href='data_siswa.php?halaman=Data Siswa&dari=siswa' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "generate"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/data_siswa.php?halaman=Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "histori"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/data_siswa.php?halaman=Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "spp"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/data_siswa.php?halaman=Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "kelas"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/data_siswa.php?halaman=Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "petugas"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/data_siswa.php?halaman=Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "admin"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/data_siswa.php?halaman=Data Siswa&dari=siswa' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Siswa</p>
                      </a>
                    </li>
                  ";
                }
              ?>
              <!-- TAMBAH SISWA DATA -->
              <?php
                if($_GET['dari'] == "siswa"){
                  echo "
                    <li class=nav-item>
                      <a href='add_siswa.php?halaman=Tambah Data Siswa&dari=siswa' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "generate"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/add_siswa.php?halaman=Tambah Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "histori"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/add_siswa.php?halaman=Tambah Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "spp"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/add_siswa.php?halaman=Tambah Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "kelas"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/add_siswa.php?halaman=Tambah Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "petugas"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/add_siswa.php?halaman=Tambah Data Siswa&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Siswa</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "admin"){
                  echo "
                    <li class=nav-item>
                      <a href='../siswa/add_siswa.php?halaman=Tambah Data Siswa&dari=siswa' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Siswa</p>
                      </a>
                    </li>
                  ";
                }
              ?>
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
            <?php
              error_reporting(0);
                if($_GET['dari'] == "petugas"){
                  echo "
                    <li class=nav-item>
                      <a href='index.php?dari=petugas&halaman=Index Petugas' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "generate"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/index.php?halaman=Index Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "histori"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/index.php?halaman=Index Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "spp"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/index.php?halaman=Index Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "kelas"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/index.php?halaman=Index Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "siswa"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/index.php?halaman=Index Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "entri"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/index.php?halaman=Index Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "admin"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/index.php?halaman=Index Petugas&dari=petugas' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Index Petugas</p>
                      </a>
                    </li>
                  ";
                }
              ?>
              <!-- PETUGAS DATA -->
              <?php
                if($_GET['dari'] == "petugas"){
                  echo "
                    <li class=nav-item>
                      <a href='data_petugas.php?halaman=Data Petugas&dari=petugas' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "generate"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/data_petugas.php?halaman=Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "histori"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/data_petugas.php?halaman=Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "spp"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/data_petugas.php?halaman=Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "kelas"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/data_petugas.php?halaman=Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "siswa"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/data_petugas.php?halaman=Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "entri"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/data_petugas.php?halaman=Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "admin"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/data_petugas.php?halaman=Data Petugas&dari=petugas' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Data Petugas</p>
                      </a>
                    </li>
                  ";
                }
              ?>
              <!-- TAMBAH DATA PETUGAS-->
              <?php
                if($_GET['dari'] == "petugas"){
                  echo "
                    <li class=nav-item>
                      <a href='add_petugas.php?halaman=Tambah Data Petugas&dari=petugas' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "generate"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/add_petugas.php?halaman=Tambah Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "histori"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/add_petugas.php?halaman=Tambah Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "spp"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/add_petugas.php?halaman=Tambah Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "kelas"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/add_petugas.php?halaman=Tambah Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "siswa"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/add_petugas.php?halaman=Tambah Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Petugas</p>
                      </a>
                    </li>
                  ";
                }
                elseif($_GET['dari'] == "entri"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/add_petugas.php?halaman=Tambah Data Petugas&dari=admin' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Petugas</p>
                      </a>
                    </li>
                  ";
                }
                if($_GET['dari'] == "admin"){
                  echo "
                    <li class=nav-item>
                      <a href='../petugas/add_petugas.php?halaman=Tambah Data Petugas&dari=petugas' class=nav-link>
                        <i class='far fa-circle nav-icon'></i>
                        <p>Tambah Petugas</p>
                      </a>
                    </li>
                  ";
                }
              ?>
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
            <!-- KELAS INDEX -->
            <?php
              error_reporting(0);
              if($_GET['dari'] == "kelas"){
                echo "
                  <li class=nav-item>
                    <a href='index.php?dari=kelas&halaman=Index Kelas' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "generate"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/index.php?halaman=Index Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/index.php?halaman=Index Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "spp"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/index.php?halaman=Index Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "petugas"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/index.php?halaman=Index Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "siswa"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/index.php?halaman=Index Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "entri"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/index.php?halaman=Index Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "admin"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/index.php?halaman=Index Kelas&dari=kelas' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index Kelas</p>
                    </a>
                  </li>
                ";
              }
              ?>
              <!-- KELAS DATA -->
              <?php
              error_reporting(0);
              if($_GET['dari'] == "kelas"){
                echo "
                  <li class=nav-item>
                    <a href='data_kelas.php?dari=kelas&halaman=Data Kelas' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Kelas Data</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "generate"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/data_kelas.php?halaman=Data Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Kelas Data</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/data_kelas.php?halaman=Data Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Kelas Data</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "spp"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/data_kelas.php?halaman=Data Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Kelas Data</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "petugas"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/data_kelas.php?halaman=Data Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Kelas Data</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "siswa"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/data_kelas.php?halaman=Data Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Kelas Data</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "entri"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/data_kelas.php?halaman=Data Kelas&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Kelas Data</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "admin"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/data_kelas.php?halaman=Data Kelas&dari=kelas' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Kelas Data</p>
                    </a>
                  </li>
                ";
              }
              ?>
              <!-- TAMBAH KELAS DATA -->
              <?php
              error_reporting(0);
              if($_GET['dari'] == "kelas"){
                echo "
                  <li class=nav-item>
                    <a href='add_kelas.php?dari=kelas&halaman=Tambah Kelas Data' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "generate"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/add_kelas.php?halaman=Tambah Kelas Data&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/add_kelas.php?halaman=Tambah Kelas Data&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "spp"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/add_kelas.php?halaman=Tambah Kelas Data&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "petugas"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/add_kelas.php?halaman=Tambah Kelas Data&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "siswa"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/add_kelas.php?halaman=Tambah Kelas Data&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "entri"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/add_kelas.php?halaman=Tambah Kelas Data&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Kelas</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "admin"){
                echo "
                  <li class=nav-item>
                    <a href='../kelas/add_kelas.php?halaman=Tambah Kelas Data&dari=kelas' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Kelas</p>
                    </a>
                  </li>
                ";
              }
              ?>
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
              <!-- KELAS INDEX -->
              <?php
              error_reporting(0);
              if($_GET['dari'] == "spp"){
                echo "
                  <li class=nav-item>
                    <a href='index.php?dari=spp&halaman=Index SPP' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "generate"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/index.php?halaman=Index SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/index.php?halaman=Index SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "entri"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/index.php?halaman=Index SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "kelas"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/index.php?halaman=Index SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "petugas"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/index.php?halaman=Index SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "siswa"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/index.php?halaman=Index SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "admin"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/index.php?halaman=Index SPP&dari=spp' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Index SPP</p>
                    </a>
                  </li>
                ";
              }
              ?>
              <!-- DATA SPP -->
              <?php
              error_reporting(0);
              if($_GET['dari'] == "spp"){
                echo "
                  <li class=nav-item>
                    <a href='data_spp.php?dari=spp&halaman=Data SPP' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "generate"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/data_spp.php?halaman=Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/data_spp.php?halaman=Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "entri"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/data_spp.php?halaman=Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "kelas"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/data_spp.php?halaman=Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "petugas"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/data_spp.php?halaman=Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "siswa"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/data_spp.php?halaman=Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "admin"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/data_spp.php?halaman=Data SPP&dari=spp' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Data SPP</p>
                    </a>
                  </li>
                ";
              }
              ?>
              <!-- TAMBAH DATA SPP -->
              <?php
              error_reporting(0);
              if($_GET['dari'] == "spp"){
                echo "
                  <li class=nav-item>
                    <a href='add_spp.php?dari=spp&halaman=Tambah Data SPP' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "generate"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/add_spp.php?halaman=Tambah Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/add_spp.php?halaman=Tambah Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "entri"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/add_spp.php?halaman=Tambah Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "kelas"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/add_spp.php?halaman=Tambah Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "petugas"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/add_spp.php?halaman=Tambah Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "siswa"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/add_spp.php?halaman=Tambah Data SPP&dari=admin' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Data SPP</p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "admin"){
                echo "
                  <li class=nav-item>
                    <a href='../spp/add_spp.php?halaman=Tambah Data SPP&dari=spp' class=nav-link>
                      <i class='far fa-circle nav-icon'></i>
                      <p>Tambah Data SPP</p>
                    </a>
                  </li>
                ";
              }
              ?>
            </ul>
          </li>
            <?php } ?>
          <li class="nav-header">TRANSAKSI</li>
          <?php
            if($_SESSION['level'] != "siswa"){
          ?>
          <?php
              error_reporting(0);
              if($_GET['dari'] == "entri"){
                echo "
                  <li class=nav-item>
                    <a href='entri_transaksi.php?dari=entri&halaman=Entri Transaksi Pembayaran' class=nav-link>
                      <i class='nav-icon fas fa-file-signature'></i>
                      <p>
                        Entri Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "generate"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/entri_transaksi.php?halaman=Entri Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-signature'></i>
                      <p>
                        Entri Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/entri_transaksi.php?halaman=Entri Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-signature'></i>
                      <p>
                        Entri Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "spp"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/entri_transaksi.php?halaman=Entri Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-signature'></i>
                      <p>
                        Entri Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/entri_transaksi.php?halaman=Entri Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-signature'></i>
                      <p>
                        Entri Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "kelas"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/entri_transaksi.php?halaman=Entri Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-signature'></i>
                      <p>
                        Entri Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "petugas"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/entri_transaksi.php?halaman=Entri Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-signature'></i>
                      <p>
                        Entri Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "siswa"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/entri_transaksi.php?halaman=Entri Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-signature'></i>
                      <p>
                        Entri Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "admin"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/entri_transaksi.php?halaman=Entri Transaksi Pembayaran&dari=entri' class=nav-link>
                      <i class='nav-icon fas fa-file-signature'></i>
                      <p>
                        Entri Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              ?>
              <?php } ?>
            <!-- history transaksi -->
          <?php
              error_reporting(0);
              if($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='history_transaksi.php?dari=histori&halaman=History Transaksi Pembayaran' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice'></i>
                      <p>
                        History Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "generate"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/history_transaksi.php?halaman=History Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice'></i>
                      <p>
                        History Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "entri"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/history_transaksi.php?halaman=History Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice'></i>
                      <p>
                        History Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "spp"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/history_transaksi.php?halaman=History Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice'></i>
                      <p>
                        History Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "kelas"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/history_transaksi.php?halaman=History Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice'></i>
                      <p>
                        History Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "petugas"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/history_transaksi.php?halaman=History Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice'></i>
                      <p>
                        History Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "siswa"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/history_transaksi.php?halaman=History Transaksi Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice'></i>
                      <p>
                        History Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "admin"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/history_transaksi.php?halaman=History Transaksi Pembayaran&dari=histori' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice'></i>
                      <p>
                        History Transaksi
                      </p>
                    </a>
                  </li>
                ";
              }
              ?>
          <!-- generate laporan -->
          <?php
            if($_SESSION['level'] == "admin"){
          ?>
          <?php
              error_reporting(0);
              if($_GET['dari'] == "generate"){
                echo "
                  <li class=nav-item>
                    <a href='generate_transaksi.php?dari=generate&halaman=Generate Pembayaran' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice-dollar'></i>
                      <p>
                      Generate Pembayaran
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "histori"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/generate_transaksi.php?halaman=Generate Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice-dollar'></i>
                      <p>
                        Generate Pembayaran
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "entri"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/generate_transaksi.php?halaman=Generate Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice-dollar'></i>
                      <p>
                        Generate Pembayaran
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "spp"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/generate_transaksi.php?halaman=Generate Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice-dollar'></i>
                      <p>
                        Generate Pembayaran
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "kelas"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/generate_transaksi.php?halaman=Generate Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice-dollar'></i>
                      <p>
                        Generate Pembayaran
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "petugas"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/generate_transaksi.php?halaman=Generate Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice-dollar'></i>
                      <p>
                        Generate Pembayaran
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "siswa"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/generate_transaksi.php?halaman=Generate Pembayaran&dari=admin' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice-dollar'></i>
                      <p>
                        Generate Pembayaran
                      </p>
                    </a>
                  </li>
                ";
              }
              elseif($_GET['dari'] == "admin"){
                echo "
                  <li class=nav-item>
                    <a href='../transaksi/generate_transaksi.php?halaman=Generate Pembayaran&dari=generate' class=nav-link>
                      <i class='nav-icon fas fa-file-invoice-dollar'></i>
                      <p>
                        Generate Pembayaran
                      </p>
                    </a>
                  </li>
                ";
              }
              ?>
            <?php } ?>

          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
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
 