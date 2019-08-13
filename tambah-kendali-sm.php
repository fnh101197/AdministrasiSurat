<?php ob_start();
include 'koneksi.php';

$kd_sm   = $_POST['kd_sm'];
$catatan   = $_POST['catatan'];
$lampiran   = $_POST['lampiran'];
mysql_query("INSERT INTO kk_sm(kd_sm,catatan,lampiran)
VALUE('$kd_sm','$catatan','$lampiran')")or die(mysql_error());


header('location:form-kendali-sm.php?kd_sm='.$kd_sm.'');
?>