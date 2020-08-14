<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->add_siswa($_POST['nisn'],$_POST['nis'],$_POST['nama'],$_POST['id_kelas'],$_POST['alamat'],$_POST['no_telp'],$_POST['id_spp']);
	header('location:data_siswa.php?dari=admin');
}
elseif($action == "update")
{
    $koneksi->update_siswa($_POST['nisn'],$_POST['nis'],$_POST['nama'],$_POST['id_kelas'],$_POST['alamat'],$_POST['no_telp'],$_POST['id_spp']);
    header("location:data_siswa.php?dari=admin");
}
elseif($action == "delete")
{
    if(isset($_GET['nisn'])){
    $nisn=$_GET['nisn'];
    $deletedata=new database();
    $sql=$deletedata->delete($nisn);
        if($sql){
            echo "<script>alert('Record deleted successfully');</script>";
            echo "<script>window.location.href='data_siswa.php?dari=admin'</script>";
        }
    }
}
?>