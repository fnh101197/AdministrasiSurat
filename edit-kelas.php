<?php ob_start();
include "koneksi.php";

$kd = $_POST['kd'];
$kd_kelas = $_POST['kd_kelas'];
$nm_kelas = $_POST['nm_kelas'];

$query=mysql_query("update kelas_surat set kd_kelas='$kd_kelas',nm_kelas='$nm_kelas' where kd='$kd'");
header('location:info-kelas-surat.php');
?>