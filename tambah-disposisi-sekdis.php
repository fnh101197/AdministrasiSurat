<?php ob_start();
include 'koneksi.php';

$kd_sm   = $_POST['kd_sm'];
$kd_disposisi   = $_POST['kd_disposisi'];
$pengelola   = $_POST['pengelola'];
$instruksi   = $_POST['instruksi'];
$tgl_diteruskan   = $_POST['tgl_diteruskan'];

$query="UPDATE disposisi SET pengelola='$pengelola', instruksi='$instruksi', tgl_diteruskan='$tgl_diteruskan' WHERE kd_disposisi='$kd_disposisi'";

mysql_query($query) or die(mysql_error());
header('location:form-disposisi-sekdis.php?kd_sm='.$kd_sm.'');
?>