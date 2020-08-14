<?php 
include('koneksi.php');
$db = new database();
$tampilspp = $db->tampilspp();
$tampilkelas = $db->tampilkelas();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><b>Edit Data Siswa</b></a>
      </div>
    
      <div class="card">
        <div class="card-body register-card-body">  
          <form action="proses.php?action=update" method="post">
             <?php
                foreach($db->edit($_GET['nisn']) as $d){
             ?>
            <div class="input-group mb-3" >
            <input type="hidden" name=nisn style="width:40%" class="form-control" value="<?php echo $d['nisn'] ?>" placeholder="NISN">
              <input disabled type="text" disabled name=nisn style="width:40%" class="form-control" value="<?php echo $d['nisn'] ?>" placeholder="NISN">
              <div class="input-group-append">
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=nis class="form-control" value="<?php echo $d['nis'] ?>" placeholder="NIS">
              <div class="input-group-append">
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=nama class="form-control" value="<?php echo $d['nama'] ?>" placeholder="NAMA LENGKAP">
              <div class="input-group-append">
              </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group">
                    <select class="form-control" name=id_kelas id="exampleFormControlSelect1">
                        <option disabled value="<?php echo $d['id_kelas'] ?>" style="text-transform: uppercase;"><?php echo $d['id_kelas']?> Yang dipilih</option>
                        <?php foreach($tampilkelas as $row): ?>
                            <option value="<?php echo $row['id_kelas'] ?>">
                                <?php echo $row['id_kelas'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="input-group mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" name=alamat rows="3"><?php echo $d['alamat'] ?></textarea>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=no_telp class="form-control" value="<?php echo $d['no_telp'] ?>"  placeholder="NOMOR TELEPHONE">
              <div class="input-group-append">
              </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group">
                    <select class="form-control" name=id_spp id="exampleFormControlSelect1">
                      <option disabled value="<?php echo $d['id_spp'] ?>" style="text-transform: uppercase;"><?php echo $d['id_spp']?> Yang dipilih</option>
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
                <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
              </div>
              <!-- /.col -->
            </div>
                        <?php } ?>
          </form>
    
          <a href="data_siswa.php" class="text-center">Data Siswa</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>