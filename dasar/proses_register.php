<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['username'],$_POST['password'],$_POST['level']);
	header('location:login.html');
}
?>