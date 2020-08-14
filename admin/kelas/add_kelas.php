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
<center>
<section class="content">
  <div class="container-fluid">
    <div class="register-box">    
      <div class="card">
        <div class="card-body register-card-body">  
          <form action="proses.php?action=add" method="post">
            <div class="input-group mb-3">
              <input type="text" name=id_kelas class="form-control" placeholder="ID KELAS">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=nama_kelas class="form-control" placeholder="NAMA KELAS">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=kompetensi_keahlian class="form-control" placeholder="KOMPETENSI KEAHLIAN">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    </div>
</section>
    </div>
    <?php
include "../footer.php";
include "../java_script.php";
?>