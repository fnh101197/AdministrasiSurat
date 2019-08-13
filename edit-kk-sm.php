<?php ob_start();
include 'koneksi.php';

$kd_sm   = $_POST['kd_sm'];
$catatan   = $_POST['catatan'];
$lampiran   = $_POST['lampiran'];

$query="UPDATE kk_sm SET catatan='$catatan',lampiran='$lampiran' WHERE kd_sm='$kd_sm'";

mysql_query($query) or die(mysql_error());
header('location:form-kendali-sm.php?kd_sm='.$kd_sm.'');
?>