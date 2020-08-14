<?php
$nominal = $x['nominal'];
$bayaran = $x['jumlah_bayar'];
if($nominal <= $bayaran ){
    echo"<span class='badge badge-success'>Lunas</span>";
}
elseif($nominal > $bayaran){
    echo"<span class='badge badge-danger'>Belum Lunas</span>";
}
?>