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
$tampilspp = $db->tampilspp();
$tampilkelas = $db->tampilkelas();
?>
<center>
<section class="content">
  <div class="container-fluid">
    <div class="register-box">  
      <div class="card">
        <div class="card-body register-card-body">  
          <form action="proses.php?action=add" method="post">
            <div class="input-group mb-3">
              <input type="text" name=nisn class="form-control" placeholder="NISN">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=nis class="form-control" placeholder="NIS">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=nama class="form-control" placeholder="NAMA LENGKAP">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group">
                    <select class="form-control" name=id_kelas id="exampleFormControlSelect1">
                        <option value="0">ID_KELAS</option>
                        <?php foreach($tampilkelas as $row): ?>
                            <option value="<?php echo $row['id_kelas'] ?>">
                                <?php echo $row['id_kelas'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=alamat class="form-control" placeholder="ALAMAT">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=no_telp class="form-control" placeholder="NOMOR TELEPHONE">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group">
                    <select class="form-control" name=id_spp id="exampleFormControlSelect1">
                        <option value="0">ID_SPP</option>
                        <?php foreach($tampilspp as $row): ?>
                            <option value="<?php echo $row['id_spp'] ?>">
                                <?php echo $row['id_spp'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
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