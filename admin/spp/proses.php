<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->add_spp($_POST['id_spp'],$_POST['tahun'],$_POST['nominal']);
	header('location:data_spp.php');
}
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
}
?>