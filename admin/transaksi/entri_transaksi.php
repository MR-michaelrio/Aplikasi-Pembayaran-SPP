  <?php
    session_start();error_reporting(0);
    if($_SESSION['level'] =="siswa"){
      header("location:../index.php?pesan=tidak_diizinkan");
      } 
    ?>
  <?php 
  include('koneksi.php');
  include('body.php');
  $db = new database();
  $nisn = $db->nisn();
  ?>
  <center>
  <section class="content">
    <div class="container-fluid">
      <div class="register-box">  
        <div class="card">
          <div class="card-body register-card-body">  
            <form action="proses.php?action=add" method="post">

            <div class="input-group mb-3">
                <input type="text" name=id_pembayaran class="form-control" placeholder="Id_Pembayaran">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                  <div class="input-group">
                      <select class="form-control select2" name=nisn id="exampleFormControlSelect1">
                          <option value="0">NISN</option>
                          <?php foreach($nisn as $row): ?>
                              <option value="<?php echo $row['nisn'] ?>">
                                  <?php echo $row['nama'] ?>
                              </option>
                          <?php endforeach ?>
                      </select>
                  </div>
              </div>
              
              <div class="input-group mb-3">
                <input type="text" name=tgl_bayar placeholder=tanggal class="form-control datepicker datetimepicker-input" data-date-format="DD-MM-YYYY" data-toggle="datetimepicker" data-target=".datepicker">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              
              <div class="input-group mb-3">
                <input type="text" name=jumlah_bayar class="form-control" placeholder="Jumlah Bayar">
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
  include "bawah.php";
  ?>