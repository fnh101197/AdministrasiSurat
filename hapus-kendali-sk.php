<?php ob_start();
 include "koneksi.php";

$kd_sk   = $_GET['kd_sk'];

 mysql_query("delete from kk_sk where kd_sk='$_GET[kd_sk]'");
 header('location:form-kendali-sk.php?kd_sk='.$kd_sk.'');
?>