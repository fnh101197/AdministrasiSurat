<?php ob_start();
include "koneksi.php";

$kd_sk = $_POST['kd_sk'];
$kd_kelas = $_POST['kd_kelas'];
$no_surat = $_POST['no_surat'];
$tgl_surat = $_POST['tgl_surat'];
$tgl_penyampaian = $_POST['tgl_penyampaian'];
$perihal = $_POST['perihal'];
$pengelola = $_POST['pengelola'];
$tujuan = $_POST['tujuan'];
$tempat_simpan = $_POST['tempat_simpan'];

	if (!empty($_FILES["gambar"]["tmp_name"]))
    	{
	        $namafolder="assets/images/surat/surat-keluar/";
	        $jenis_gambar=$_FILES['gambar']['type'];
	        if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
        {
            $gambar = basename ($_FILES['gambar']['name']);
            if (!move_uploaded_file($_FILES['gambar']['tmp_name'], $namafolder.$gambar))
            {
               die("Gambar gagal dikirim");
            }
            mysql_query("UPDATE surat_keluar SET gambar='$gambar' WHERE kd_sk='$kd_sk'");
        }
        else { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
    }

$query=mysql_query("update surat_keluar set kd_kelas='$kd_kelas', no_surat='$no_surat', tgl_surat='$tgl_surat', tgl_penyampaian='$tgl_penyampaian', perihal='$perihal', pengelola='$pengelola', tujuan='$tujuan', tempat_simpan='$tempat_simpan' where kd_sk='$kd_sk'");
header('location:surat-keluar.php');
?>