<?php
class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "spp";
    var $koneksi = "";
    
    function __construct(){
        $con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        $this->koneksi=$con;
    }

    function login_masuk($username,$password){
   
        $q = mysqli_query($this->koneksi,"select * from siswa where nama='$username' and nis='$password'");
        $r = mysqli_fetch_array ($q);
    
        $q2 = mysqli_query($this->koneksi,"select * from petugas where username='$username' and password='$password'");
        $row = mysqli_fetch_array ($q2);

        if (mysqli_num_rows($q) == 1) {
            $_SESSION['username'] = $r['nama'];
            $_SESSION['password'] = $r['nis'];
            $_SESSION['level'] = 'siswa';
            return TRUE;
        }
        elseif (mysqli_num_rows($q2) == 1) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['level1'] = 'petugas';
            $_SESSION['level'] = $row['level'];
            $_SESSION['id_petugas'] = $row['id_petugas'];
            return TRUE;
        }
        elseif (mysqli_num_rows($q2) == 1) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['id_petugas'] = $row['id_petugas'];
            $_SESSION['level'] = $row['level'];
            return TRUE;
        }else {
            return FALSE;
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header("location:login.php?pesan=logout");
    }
}
?>