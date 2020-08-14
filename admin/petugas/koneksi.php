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
		$data = mysqli_query($this->koneksi,"SELECT * FROM petugas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function add_petugas($id_petugas,$username,$password,$nama_petugas,$level)
	{
		mysqli_query($this->koneksi,"insert into petugas values ('$id_petugas','$username','$password','$nama_petugas','$level')");
	}

	function edit($id_petugas){
		$data = mysqli_query($this->koneksi,"select * from petugas where id_petugas='$id_petugas'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function update($id_petugas,$username,$password,$nama_petugas,$level){
		mysqli_query($this->koneksi,"UPDATE petugas set id_petugas='$id_petugas',username='$username',password='$password',nama_petugas='$nama_petugas',level='$level' where id_petugas='$id_petugas'");
	}

	function delete($id_petugas)
	{
	$deleterecord=mysqli_query($this->koneksi,"delete from petugas where id_petugas=$id_petugas");
	return $deleterecord;
	}
} 

?>