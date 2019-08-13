<?php ob_start();
include "koneksi.php";

$nama   = $_POST['nama'];
$username   = $_POST['username'];
$password  = $_POST['password'];
$level = $_POST['level'];

mysql_query("INSERT INTO user(nama,username,password,level)
VALUE('$nama','$username','$password','$level')")or die(mysql_error());


header('location:datauser.php');
?>