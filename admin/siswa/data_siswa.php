<?php
session_start();error_reporting(0);
	if($_SESSION['level'] !="admin"){
		header("location:../index.php?pesan=tidak_diizinkan");
    } 
	?>
<?php 
include('koneksi.php');
include('../body.php');
$db = new database();
?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>NOMOR TELEPHONE</th>
                  <th>ID_KELAS</th>
                  <th>NOMINAL</th>
                  <th>ID_SPP</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <?php
              $no = 1;
              $tampil = $db->tampil_data1();
              foreach($tampil as $x){
              ?>
              <tbody>
                  <tr>
                      <td><?php echo $x['nisn']; ?></td>
                      <td><?php echo $x['nis']; ?></td>
                      <td><?php echo $x['nama']; ?></td>
                      <td><?php echo $x['alamat']; ?></td>
                      <td><?php echo $x['no_telp']; ?></td>
                      <td><?php echo $x['id_kelas']; ?></td>
                      <td><?php echo $x['nominal']; ?></td>
                      <td><?php echo $x['id_spp']; ?></td>
                      <td>
                        <a href="update_siswa.php?nisn=<?php echo htmlentities($x['nisn']);?>"><button class="btn btn-primary btn-xs">UPDATE</span></button></a> | 
                        <a href="proses.php?action=delete&nisn=<?php echo htmlentities($x['nisn']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">DELETE</button></a>
                      </td>
                  </tr>
              </tbody>
              <?php 
              }
              ?>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</div>
</section>
    </div>
    <?php
include "../footer.php";
include "../java_script.php";
?>