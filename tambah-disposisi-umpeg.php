<?php ob_start();
include 'koneksi.php';

$kd_sm   = $_POST['kd_sm'];
$indeks   = $_POST['indeks'];
mysql_query("INSERT INTO disposisi(kd_sm,indeks)
VALUE('$kd_sm','$indeks')")or die(mysql_error());


header('location:form-disposisi-umpeg.php?kd_sm='.$kd_sm.'');
?>