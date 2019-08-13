<?php ob_start();
include "koneksi.php";

$kd_user = $_POST['kd_user'];
$nama 	= $_POST['nama'];
$username 	= $_POST['username'];
$password  = $_POST['password'];

$query=mysql_query("update user set nama='$nama', username='$username', password='$password' where kd_user='$kd_user'");
header('location:datauser.php');
?>