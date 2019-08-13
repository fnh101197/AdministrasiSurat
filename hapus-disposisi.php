<?php ob_start();
 include "koneksi.php";
$kd_sm   = $_GET['kd_sm'];

 mysql_query("delete from disposisi where kd_sm='$_GET[kd_sm]'");
 header('location:form-disposisi-umpeg.php?kd_sm='.$kd_sm.'');
?>