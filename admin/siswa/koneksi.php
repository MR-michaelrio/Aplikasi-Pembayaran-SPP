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
		$data = mysqli_query($this->koneksi,"SELECT * FROM siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tampil_data1(){
		$data = "SELECT * FROM siswa INNER JOIN spp ON siswa.id_spp = spp.id_spp";
		$query =  mysqli_query($this->koneksi, $data);
		while($row = mysqli_fetch_array($query)){
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
	
	function add_siswa($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp)
	{
		mysqli_query($this->koneksi,"insert into siswa values ('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')");
	}

	function edit($nisn){
		$data = mysqli_query($this->koneksi,"select * from siswa where nisn='$nisn'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function update_siswa($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){
		mysqli_query($this->koneksi,"UPDATE siswa set nisn='$nisn',nis='$nis',nama='$nama',id_kelas='$id_kelas',alamat='$alamat',no_telp='$no_telp',id_spp='$id_spp' where nisn='$nisn'");
	}

	function delete($nisn)
	{
	$deleterecord=mysqli_query($this->koneksi,"delete from siswa where nisn=$nisn");
	return $deleterecord;
	}
} 

?>