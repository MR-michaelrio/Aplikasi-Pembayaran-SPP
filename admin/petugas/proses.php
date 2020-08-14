<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->add_petugas($_POST['id_petugas'],$_POST['username'],$_POST['password'],$_POST['nama_petugas'],$_POST['level']);
	header('location:data_petugas.php?dari=admin');
}
elseif($action == "update")
{
    $koneksi->update($_POST['id_petugas'],$_POST['username'],$_POST['password'],$_POST['nama_petugas'],$_POST['level']);
    header("location:data_petugas.php?dari=admin");
}
elseif($action == "delete")
{
    if(isset($_GET['id_petugas'])){
    $id_petugas=$_GET['id_petugas'];
    $deletedata=new database();
    $sql=$deletedata->delete($id_petugas);
        if($sql){
            echo "<script>alert('Record deleted successfully');</script>";
            echo "<script>window.location.href='data_petugas.php?dari=admin'</script>";
        }
    }
}
?>