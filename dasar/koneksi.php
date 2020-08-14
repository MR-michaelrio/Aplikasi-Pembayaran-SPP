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
    
    function tampil_data(){
        //$data = mysqli_query($this->dbh,"SELECT * FROM siswa");
		$data = mysqli_query($this->koneksi,"SELECT * FROM siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	
	function tampilspp(){
		$data = mysqli_query($this->koneksi,"SELECT * FROM spp");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	
	function tampilkelas(){
		$data = mysqli_query($this->koneksi,"SELECT * FROM kelas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }

    function tambah_data($nisn,$nis,$nama,$password,$id_kelas,$alamat,$no_telp,$id_spp)
	{
		mysqli_query($this->koneksi,"insert into login values ('$nisn','$nis','$nama','$password','$id_kelas','$alamat','$no_telp','$id_spp')");
	}

	function add_siswa($nisn,$nis,$nama,$password,$id_kelas,$alamat,$no_telp,$id_spp)
	{
		mysqli_query($this->koneksi,"insert into siswa values ('$nisn','$nis','$nama','$password','$id_kelas','$alamat','$no_telp','$id_spp')");
	}

} 

?>