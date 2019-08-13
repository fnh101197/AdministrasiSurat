<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from user where kd_user='$_GET[kd_user]'");
 header('location:datauser.php');
?>