<?php 
session_start();
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
		$nama = $_SESSION['username'];
		if($_SESSION['level'] == "siswa"){
			$data = "SELECT * FROM pembayaraan INNER JOIN spp ON pembayaraan.id_spp = spp.id_spp INNER JOIN petugas ON pembayaraan.id_petugas = petugas.id_petugas INNER JOIN siswa ON pembayaraan.nisn = siswa.nisn WHERE nama='$nama'";
			$query =  mysqli_query($this->koneksi, $data);
			while($row = mysqli_fetch_array($query)){
				$hasil[] = $row;
			}
			return $hasil;
		}else{
		$data = "SELECT * FROM pembayaraan INNER JOIN spp ON pembayaraan.id_spp = spp.id_spp INNER JOIN petugas ON pembayaraan.id_petugas = petugas.id_petugas INNER JOIN siswa ON pembayaraan.nisn = siswa.nisn";
		$query =  mysqli_query($this->koneksi, $data);
		while($row = mysqli_fetch_array($query)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	}

	function tampil_data1(){
		$data = "SELECT * FROM pembayaraan INNER JOIN spp ON pembayaraan.id_spp = spp.id_spp INNER JOIN petugas ON pembayaraan.id_petugas = petugas.id_petugas INNER JOIN siswa ON pembayaraan.nisn = siswa.nisn INNER JOIN kelas ON pembayaraan.id_kelas = kelas.id_kelas";
		$query =  mysqli_query($this->koneksi, $data);
		while($row = mysqli_fetch_array($query)){
			$hasil[] = $row;
		}
		return $hasil;
	}

    function nisn(){
		$data = mysqli_query($this->koneksi,"SELECT * FROM siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function entri_spp($nisn){
		$data = mysqli_query($this->koneksi,"select * from siswa where nisn='$nisn'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function entri_transaksi($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$id_kelas,$jumlah_bayar)
	{
		mysqli_query($this->koneksi,"INSERT into pembayaraan values ('$id_pembayaran','$id_petugas','$nisn','$tgl_bayar','$bulan_bayar','$tahun_bayar','$id_spp','$id_kelas','$jumlah_bayar')");
	}

	function delete($id_pembayaran)
	{
	$deleterecord=mysqli_query($this->koneksi,"delete from pembayaraan where id_pembayaran=$id_pembayaran");
	return $deleterecord;
	}

}
function getbulan($bulan){
	switch ($bulan) {
		case "Jan":
		  echo "Januari";
		  break;
		case "Feb":
		  echo "Febuari";
		  break;
		case "Mar":
		  echo "Maret";
		  break;
		case "Apr":
		  echo "April";
		  break;
		case "May":
		  echo "Mei";
		  break;
		case "Jun":
		  echo "Juni";
		  break;
		case "Jul":
		  echo "Juli";
		  break;
		case "Aug":
		  echo "Agustus";
		  break;
		case "Sep":
		  echo "September";
		  break;
		case "Oct":
		  echo "Oktober";
		  break;
		case "Nov":
		  echo "November";
		  break;
		case "Des":
		  echo "December";
		  break;
	  }
}
?>