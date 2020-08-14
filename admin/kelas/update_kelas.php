<?php 
include('koneksi.php');
$db = new database();
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
        <a href="#"><b>Edit Data Kelas</b></a>
      </div>
    
      <div class="card">
        <div class="card-body register-card-body">  
          <form action="proses.php?action=update" method="post">
             <?php
                foreach($db->edit($_GET['id_kelas']) as $d){
             ?>
            <div class="input-group mb-3" >
            <input type="hidden" name=id_kelas style="width:40%" class="form-control" value="<?php echo $d['id_kelas'] ?>" placeholder="ID KELAS">
              <input type="text" disabled name=id_kelas style="width:40%" class="form-control" value="<?php echo $d['id_kelas'] ?>" placeholder="ID KELAS">
              <div class="input-group-append">
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=nama_kelas class="form-control" value="<?php echo $d['nama_kelas'] ?>" placeholder="NAMA KELAS">
              <div class="input-group-append">
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name=kompetensi_keahlian class="form-control" value="<?php echo $d['kompetensi_keahlian'] ?>" placeholder="KOMPETENSI KEAHLIAN">
              <div class="input-group-append">
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
    
          <a href="data_kelas.php" class="text-center">Data Kelas</a>
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