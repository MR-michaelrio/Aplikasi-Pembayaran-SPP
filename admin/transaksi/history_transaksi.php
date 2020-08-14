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
                      <th style="width: 20%" class="text-center">
                          Petugas
                      </th>
                      <th style="width: 20%" class="text-center">
                          Nama Siswa
                      </th>
                      <th style="width: 20%" class="text-center">
                          Tanggal Bayar
                      </th>
                      <th style="width: 20%" class="text-center">
                          Jumlah Bayar
                      </th>
                      <th  class="text-center">
                          Keterangan
                      </th>
                      <?php 
                      if($_SESSION['level'] != "siswa"){
                      ?>
                      <th style="width: 10%">
                      </th>
                      <?php } ?>
                  </tr>
              </thead>
              <?php
                $no = 1;
                $tampil = $db->tampil_data();
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
                        <?php echo $x['nama'];?>
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
                      <?php 
                      if($_SESSION['level'] != "siswa"){
                      ?>
                      <td class="project-actions text-right">
                          <a onClick="return confirm('Do you really want to delete');" class="btn btn-danger btn-sm" href="proses.php?action=delete&id_pembayaran=<?php echo htmlentities($x['id_pembayaran']);?>">
                          <i class="fas fa-trash" >
                              </i>
                            DELETE
                          </a>
                      </td>
                      <?php } ?>
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