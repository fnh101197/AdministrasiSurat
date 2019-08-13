<?php ob_start();
include "koneksi.php";

$kd_kelas   = $_POST['kd_kelas'];
$nm_kelas  = $_POST['nm_kelas'];


mysql_query("INSERT INTO kelas_surat(kd_kelas,nm_kelas)
VALUE('$kd_kelas','$nm_kelas')")or die(mysql_error());


header('location:info-kelas-surat.php');
?>