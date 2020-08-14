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
                    <th>ID KELAS</th>
                    <th>NAMA KELAS</th>
                    <th>KOMPETENSI KEAHLIAN</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <?php
                $no = 1;
                $tampil = $db->tampil_data();
                foreach($tampil as $x){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $x['id_kelas']; ?></td>
                        <td><?php echo $x['nama_kelas']; ?></td>
                        <td><?php echo $x['kompetensi_keahlian']; ?></td>
                        <td>
                          <a href="update_kelas.php?id_kelas=<?php echo htmlentities($x['id_kelas']);?>"><button class="btn btn-primary btn-xs">UPDATE</span></button></a> | 
                          <a href="proses.php?action=delete&id_kelas=<?php echo htmlentities($x['id_kelas']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">DELETE</button></a>
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