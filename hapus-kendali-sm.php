<?php ob_start();
 include "koneksi.php";

 $kd_sm = $_GET['kd_sm'];
 mysql_query("delete from kk_sm where kd_sm='$_GET[kd_sm]'");
 header('location:form-kendali-sm.php?kd_sm='.$kd_sm.'');
?>