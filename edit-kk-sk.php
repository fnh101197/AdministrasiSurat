<?php ob_start();
include 'koneksi.php';

$kd_sk   = $_POST['kd_sk'];
$indeks   = $_POST['indeks'];
$catatan   = $_POST['catatan'];
$lampiran   = $_POST['lampiran'];
$query="UPDATE kk_sk SET indeks='$indeks',catatan='$catatan',lampiran='$lampiran' WHERE kd_sk='$kd_sk'";

mysql_query($query) or die(mysql_error());
header('location:form-kendali-sk.php?kd_sk='.$kd_sk.'');
?>