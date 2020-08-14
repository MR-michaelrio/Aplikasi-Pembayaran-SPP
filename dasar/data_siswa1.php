<?php
	session_start();
	if($_SESSION['level1'] !="petugas"){
		header("location:../login.php?pesan=tidak_diizinkan");
    }
	?>
<h1>w9w9</h1>