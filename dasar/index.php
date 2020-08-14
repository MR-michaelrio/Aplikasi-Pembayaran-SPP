<?php 
include('koneksi.php');
$db = new database();
?>
<h1>CRUD OOP PHP</h1>
<h2>WWW.MALASNGODING.COM</h2>
<h3>Data User</h3>

<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>NISN</th>
		<th>NIS</th>
		<th>NAMA</th>
	</tr>
	<?php
    $no = 1;
    $tampil = $db->tampil_data();
	foreach($tampil as $x){
	?>
	<tr>
		<td><?php echo $x['nisn']; ?></td>
		<td><?php echo $x['nis']; ?></td>
		<td><?php echo $x['nama']; ?></td>
	</tr>
	<?php 
	}
	?>
</table>