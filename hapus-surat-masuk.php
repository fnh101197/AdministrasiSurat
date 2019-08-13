<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from surat_masuk where kd_sm='$_GET[kd_sm]'");
 header('location:surat-masuk.php');
?>