<?php ob_start();
include 'koneksi.php';

$kd_disposisi = $_POST['kd_disposisi'];
$kd_sm   = $_POST['kd_sm'];
$indeks   = $_POST['indeks'];

$query="UPDATE disposisi SET indeks='$indeks' WHERE kd_disposisi='$kd_disposisi' AND kd_sm='$kd_sm'";

mysql_query($query) or die(mysql_error());
header('location:form-disposisi-umpeg.php?kd_sm='.$kd_sm.'');
?>