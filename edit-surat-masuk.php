<?php ob_start();
include "koneksi.php";

$kd_sm = $_POST['kd_sm'];
$kd_kelas = $_POST['kd_kelas'];
$no_surat = $_POST['no_surat'];
$tgl_surat = $_POST['tgl_surat'];
$tgl_terima = $_POST['tgl_terima'];
$perihal = $_POST['perihal'];
$asal = $_POST['asal'];
$tgl_penyampaian = $_POST['tgl_penyampaian'];
$isi_disposisi = $_POST['isi_disposisi'];
$tgl_pelaksanaan  = $_POST['tgl_pelaksanaan'];
$jam_pelaksanaan  = $_POST['jam_pelaksanaan'];
$pengelola = $_POST['pengelola'];
$tempat = $_POST['tempat'];
$terima = $_POST['terima'];

    if (!empty($_FILES["gambar"]["tmp_name"]))
    {
        $namafolder="assets/images/surat/surat-masuk/";
        $jenis_gambar=$_FILES['gambar']['type'];
        if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
        {
            $gambar = round(microtime(true)) . end($temp);//fungsi untuk membuat nama acak
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $namafolder."/" . $gambar)) {
                echo "<br>upload gambar berhasil";
            } else {
                echo "<br>upload gagal";
            }
            mysql_query("UPDATE surat_masuk SET gambar='$gambar' WHERE kd_sm='$kd_sm'");
        }
        else { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
    }

$query="UPDATE surat_masuk SET kd_kelas='$kd_kelas', no_surat='$no_surat', tgl_surat='$tgl_surat', tgl_terima='$tgl_terima', perihal='$perihal', asal='$asal', tgl_penyampaian='$tgl_penyampaian', isi_disposisi='$isi_disposisi', tgl_pelaksanaan='$tgl_pelaksanaan', jam_pelaksanaan='$jam_pelaksanaan', pengelola='$pengelola', tempat='$tempat', terima='$terima' WHERE kd_sm='$kd_sm'";

mysql_query($query) or die(mysql_error());
header('location:surat-masuk.php');
?>