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
		$data = mysqli_query($this->koneksi,"SELECT * FROM kelas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function add_kelas($id_kelas,$nama_kelas,$kompetensi_keahlian)
	{
		mysqli_query($this->koneksi,"insert into kelas values ('$id_kelas','$nama_kelas','$kompetensi_keahlian')");
	}

	function edit($id_kelas){
		$data = mysqli_query($this->koneksi,"select * from kelas where id_kelas='$id_kelas'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function update($id_kelas,$nama_kelas,$kompetensi_keahlian){
		mysqli_query($this->koneksi,"UPDATE kelas set id_kelas='$id_kelas',nama_kelas='$nama_kelas',kompetensi_keahlian='$kompetensi_keahlian' where id_kelas='$id_kelas'");
	}

	function delete($id_kelas)
	{
	$deleterecord=mysqli_query($this->koneksi,"delete from kelas where id_kelas=$id_kelas");
	return $deleterecord;
	}

	/*function tampil_data1(){
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
	


	function edit($id_kelas){
		$data = mysqli_query($this->koneksi,"select * from siswa where id_kelas='$id_kelas'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function update($id_kelas,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){
		mysqli_query($this->koneksi,"UPDATE siswa set id_kelas='$id_kelas',nis='$nis',nama='$nama',id_kelas='$id_kelas',alamat='$alamat',no_telp='$no_telp',id_spp='$id_spp' where id_kelas='$id_kelas'");
	}

	function delete($id_kelas)
	{
	$deleterecord=mysqli_query($this->koneksi,"delete from siswa where id_kelas=$id_kelas");
	return $deleterecord;
	}*/
} 

?>