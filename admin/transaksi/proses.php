<?php
error_reporting(0);
include('koneksi.php');
$koneksi = new database();
foreach($koneksi->entri_spp($_POST['nisn']) as $d){
$spp =  $d['id_spp'];
$kelas =  $d['id_kelas'];
} 
?>
<?php 
$action = $_GET['action'];
$id_pembayaran = $_POST['id_pembayaran'];
$petugas = $_SESSION['id_petugas'];
$nisn = $_POST['nisn'];
$tanggal = $_POST['tgl_bayar'];
$tgl = date("Y-m-d", strtotime($tanggal));
//$tgl = date('Y-m-d', strtotime($this->input->post['tgl_bayar']));
//$tgl = $_POST['tgl_bayar'];
//$bulan = $_POST['bulan_bayar'];
//$tahun = $_POST['tahun_bayar'];

$bulan = date("M", strtotime($tanggal));  
$tahun = date("Y", strtotime($tanggal));
//$kelas = $_POST['id_kelas'];
$jumlah = $_POST['jumlah_bayar'];

if($action == "add")
{
    $koneksi->entri_transaksi($id_pembayaran,$petugas,$nisn,$tgl,$bulan,$tahun,$spp,$kelas,$jumlah);
    header('location:index.php?halaman=Index Entri&dari=admin');

}
elseif($action == "delete")
{
    if(isset($_GET['id_pembayaran'])){
    $id_pembayaran=$_GET['id_pembayaran'];
    $deletedata=new database();
    $sql=$deletedata->delete($id_pembayaran);
        if($sql){
            echo "<script>alert('Record deleted successfully');</script>";
            echo "<script>window.location.href='history_transaksi.php?halaman=History Transaksi&dari=admin'</script>";
        }
    }
}
/*

    echo $id_pembayaran;echo"| ";
    echo $petugas;echo"| ";
    echo $nisn;echo"| ";
    echo $tgl; echo"| ";
    echo $bulan; echo"| ";
    echo $tahun;echo"| ";
    echo $spp;echo"| ";
    echo $kelas;echo"| ";
    echo $jumlah;




$koneksi->entri_transaksi($petugas,$nisn,$tgl,$bulan,$tahun,$spp,$jumlah);
    header('location:index.php');
elseif($action == "update")
{
    $koneksi->update_spp($_POST['id_spp'],$_POST['tahun'],$_POST['nominal']);
    header("location:data_spp.php");
}
elseif($action == "delete")
{
    if(isset($_GET['id_spp'])){
    $id_spp=$_GET['id_spp'];
    $deletedata=new database();
    $sql=$deletedata->delete($id_spp);
        if($sql){
            echo "<script>alert('Record deleted successfully');</script>";
            echo "<script>window.location.href='data_spp.php'</script>";
        }
    }
}*/
?>