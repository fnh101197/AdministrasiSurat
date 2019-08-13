<?php ob_start();
include "koneksi.php";

if (isset($_POST['input'])) 
	{  
		$dir_upload = "assets/images/surat/surat-keluar/";
  		$nama_file  = $_FILES['gambar']['name'];
		if (is_uploaded_file($_FILES['gambar']['tmp_name'])) 
		{
	   		$cek = move_uploaded_file ($_FILES['gambar']['tmp_name'], $dir_upload.$nama_file);
		} 
	} 

$kd_kelas   = $_POST['kd_kelas'];
$no_surat   = $_POST['no_surat'];
$tgl_surat  = $_POST['tgl_surat'];
$perihal = $_POST['perihal'];
$tgl_penyampaian = $_POST['tgl_penyampaian'];
$pengelola = $_POST['pengelola'];
$tujuan = $_POST['tujuan'];
$gambar = $nama_file;
$tempat_simpan = $_POST['tempat_simpan'];

mysql_query("INSERT INTO surat_keluar(kd_kelas,no_surat,tgl_surat,perihal,tgl_penyampaian,pengelola,tujuan,gambar,tempat_simpan)
VALUE('$kd_kelas','$no_surat','$tgl_surat','$perihal','$tgl_penyampaian','$pengelola','$tujuan','$gambar','$tempat_simpan')")or die(mysql_error());


header('location:surat-keluar.php');
?>