<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from kelas_surat where kd='$_GET[id_adm]'");
 header('location:info-kelas-surat.php');
?>