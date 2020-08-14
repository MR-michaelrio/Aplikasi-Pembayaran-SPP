<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->add_kelas($_POST['id_kelas'],$_POST['nama_kelas'],$_POST['kompetensi_keahlian']);
	header('location:data_kelas.php');
}
elseif($action == "update")
{
    $koneksi->update($_POST['id_kelas'],$_POST['nama_kelas'],$_POST['kompetensi_keahlian']);
    header("location:data_kelas.php");
}
elseif($action == "delete")
{
    if(isset($_GET['id_kelas'])){
    $id_kelas=$_GET['id_kelas'];
    $deletedata=new database();
    $sql=$deletedata->delete($id_kelas);
        if($sql){
            echo "<script>alert('Record deleted successfully');</script>";
            echo "<script>window.location.href='data_kelas.php'</script>";
        }
    }
}
?>