<?php ob_start();
include 'koneksi.php';

$kd_sk   = $_POST['kd_sk'];
$indeks   = $_POST['indeks'];
$catatan   = $_POST['catatan'];
$lampiran   = $_POST['lampiran'];

mysql_query("INSERT INTO kk_sk(kd_sk,indeks,catatan,lampiran)
VALUE('$kd_sk','$indeks','$catatan','$lampiran')")or die(mysql_error());


header('location:form-kendali-sk.php?kd_sk='.$kd_sk.'');
?>