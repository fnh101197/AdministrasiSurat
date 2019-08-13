<?php ob_start();
include "koneksi.php";

$nm_lengkap_sb   = $_POST['nm_lengkap_sb'];
$nm_sb   = $_POST['nm_sb'];


mysql_query("INSERT INTO subbidang(nm_lengkap_sb,nm_sb)
VALUE('$nm_lengkap_sb','$nm_sb')")or die(mysql_error());


header('location:info-bidang.php');
?>