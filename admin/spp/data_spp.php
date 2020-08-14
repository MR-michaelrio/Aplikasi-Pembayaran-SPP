<?php
	session_start();
	if($_SESSION['level'] !="admin"){
		header("location:../index.php?pesan=tidak_diizinkan");
    } 
	?>
<?php 
include('koneksi.php');
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
        <h3 class="card-title" style="margin-right:10px;"><a href="../index.php"><button class="btn btn-primary btn-xs">HOME</span></button></a></h3>
          <h3 class="card-title">Table SPP</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <div class="input-group-append">
                  <a href="add_spp.php"><button class="btn btn-primary btn-xs">ADD DATA</span></button></a>&nbsp;
                  <a href="../../logout.php"><button class="btn btn-danger btn-xs">LOGOUT</button></a>
                </div>
              </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID SPP</th>
                <th>TAHUN</th>
                <th>NOMINAL</th>
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
                    <td><?php echo $x['id_spp']; ?></td>
                    <td><?php echo $x['tahun']; ?></td>
                    <td><?php echo $x['nominal']; ?></td>
                    <td>
                      <a href="update_spp.php?id_spp=<?php echo htmlentities($x['id_spp']);?>"><button class="btn btn-primary btn-xs">UPDATE</span></button></a> | 
                      <a href="proses.php?action=delete&id_spp=<?php echo htmlentities($x['id_spp']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">DELETE</button></a>
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
</body>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>