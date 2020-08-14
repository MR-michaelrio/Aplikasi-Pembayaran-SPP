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
		$data = mysqli_query($this->koneksi,"SELECT * FROM spp");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function add_spp($id_spp,$tahun,$nominal)
	{
		mysqli_query($this->koneksi,"insert into spp values ('$id_spp','$tahun','$nominal')");
	}

	function edit($id_spp){
		$data = mysqli_query($this->koneksi,"select * from spp where id_spp='$id_spp'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function update_spp($id_spp,$tahun,$nominal){
		mysqli_query($this->koneksi,"UPDATE spp set id_spp='$id_spp',tahun='$tahun',nominal='$nominal' where id_spp='$id_spp'");
	}

	function delete($id_spp)
	{
	$deleterecord=mysqli_query($this->koneksi,"delete from spp where id_spp=$id_spp");
	return $deleterecord;
	}

} 

?>