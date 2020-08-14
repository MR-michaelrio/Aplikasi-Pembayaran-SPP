<?php
session_start();
include 'proseslogin.php';
$db = new database();

if(isset($_GET)){
    $logout = $db->logout();
    if ($logout){
        header('location:login.php');
    }
}
?>
