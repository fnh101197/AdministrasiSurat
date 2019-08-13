<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from surat_keluar where kd_sk='$_GET[kd_sk]'");
 header('location:surat-keluar.php');
?>