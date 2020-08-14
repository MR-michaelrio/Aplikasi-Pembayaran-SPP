<?php error_reporting(0);
session_start();
include('koneksi.php');
include('body.php');
$db = new database();
?>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped  table-bordered projects table-hover">
              <thead>
                  <tr>
                      <th style="width: 1%" class="text-center">
                        Id_Pembayaran
                      </th>
                      <th class="text-center">
                         Id_Petugas
                      </th>
                      <th class="text-center">
                          Nama_Petugas
                      </th>
                      <th class="text-center">
                          NISN
                      </th>
                      <th class="text-center">
                          Nama_Siswa
                      </th>
                      <th class="text-center">
                          Kelas
                      </th>
                      <th class="text-center">
                          Alamat
                      </th>
                      <th class="text-center">
                          Nomor_Hp
                      </th>
                      <th class="text-center">
                          Nominal
                      </th>
                      <th class="text-center">
                          Tanggal Bayar
                      </th>
                      <th class="text-center">
                          Jumlah Bayar
                      </th>
                      <th class="text-center">
                          Keterangan
                      </th>
                  </tr>
              </thead>
              <?php
                $no = 1;
                $tampil = $db->tampil_data1();
                foreach($tampil as $x){
                    $tanggal =  $x['tgl_bayar'];
                    $bulan = $x['bulan_bayar'];
                ?>
              <tbody>
                  <tr>
                      <td class="text-center">
                        <?php echo $x['id_pembayaran']; ?>
                      </td>
                      <td class="text-center">
                        <?php echo $x['nama_petugas']; ?>
                      </td>
                      <td class="text-center" >
                        <?php echo $x['nama_petugas'];?>
                      </td>
                      <td class="text-center" >
                        <?php echo $x['nisn'];?>
                      </td>
                      <td class="text-center" >
                        <?php echo $x['nama'];?>
                      </td>
                      <td class="text-center" >
                        <?php echo $x['nama_kelas'];?>
                      </td>
                      <td class="text-center" >
                        <?php echo $x['alamat'];?>
                      </td>
                      <td class="text-center" >
                        <?php echo $x['no_telp'];?>
                      </td>
                      <td class="text-center" >
                        <?php echo $x['nominal'];?>
                      </td>
                      <td class="text-center">
                        <?php echo date("d", strtotime($tanggal) ); echo "-"; echo getbulan($bulan); echo "-"; echo $x['tahun_bayar']; ?>
                      </td>
                      <td class="project-state">
                        <?php echo $x['jumlah_bayar']; ?>
                      </td>
                      <td class="project-state">
                        <?php include "lunas.php"; ?>
                      </td>
                <?php } ?>
                  </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
    <?php
include "../footer.php";
include "bawah.php";
?>