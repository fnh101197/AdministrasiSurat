<?
session_start();
//periksa apakah user telah login atau memiliki sesion
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
?><script language='javascript'> document.location='index.php'</script><?
} else {
unset($_SESSION);
session_destroy();
?>
<script language="javascript"> document.location='index.php'</script><?
}
?>