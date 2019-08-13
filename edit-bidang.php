<?php ob_start();
include "koneksi.php";

$kd_sb = $_POST['kd_sb'];
$nm_sb = $_POST['nm_sb'];
$nm_lengkap_sb = $_POST['nm_lengkap_sb'];

$query=mysql_query("update subbidang set nm_sb='$nm_sb', nm_lengkap_sb='$nm_lengkap_sb' where kd_sb='$kd_sb'");
header('location:info-bidang.php');
?>