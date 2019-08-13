<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from subbidang where kd_sb='$_GET[kd_sb]'");
 header('location:info-bidang.php');
?>