<?php ob_start();
include 'koneksi.php';

if (isset($_POST['input'])) 
	{  
		$dir_upload = "assets/images/surat/surat-masuk/";
  		$nama_file  = $_FILES['gambar']['name'];
		if (is_uploaded_file($_FILES['gambar']['tmp_name'])) 
		{
	   		$cek = move_uploaded_file ($_FILES['gambar']['tmp_name'], $dir_upload.$nama_file);
		} 
	} 

$kd_kelas   = $_POST['kd_kelas'];
$no_surat   = $_POST['no_surat'];
$tgl_surat  = $_POST['tgl_surat'];
$tgl_terima  = $_POST['tgl_terima'];
$asal  = $_POST['asal'];
$perihal = $_POST['perihal'];
$tgl_pelaksanaan  = $_POST['tgl_pelaksanaan'];
$jam_pelaksanaan  = $_POST['jam_pelaksanaan'];
$tempat  = $_POST['tempat'];
$tgl_penyampaian = $_POST['tgl_penyampaian'];
$pengelola = $_POST['pengelola'];
$isi_disposisi = $_POST['isi_disposisi'];
$gambar = $nama_file;
$terima  = $_POST['terima'];

mysql_query("INSERT INTO surat_masuk(kd_kelas,no_surat,tgl_surat,tgl_terima,asal,perihal,tgl_pelaksanaan,jam_pelaksanaan,tempat,tgl_penyampaian,pengelola,isi_disposisi,gambar,terima)
VALUE('$kd_kelas','$no_surat','$tgl_surat','$tgl_terima','$asal','$perihal','$tgl_pelaksanaan','$jam_pelaksanaan','$tempat','$tgl_penyampaian','$pengelola','$isi_disposisi','$gambar','$terima')")or die(mysql_error());


header('location:surat-masuk.php');
?>