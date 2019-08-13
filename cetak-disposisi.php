<!DOCTYPE html><?php error_reporting(0)?>
<html>
<?php 
include "koneksi.php";
include "tgl-indo.php";
    $kd_sm=$_GET['kd_sm'];
    $query=mysql_query("SELECT
        surat_masuk.kd_sm,
        surat_masuk.isi_disposisi,
        surat_masuk.asal,
        surat_masuk.perihal,
        surat_masuk.tgl_surat,
        surat_masuk.no_surat,
        surat_masuk.tgl_penyampaian,
        surat_masuk.kd_kelas,
        disposisi.indeks,
        disposisi.pengelola,
        disposisi.instruksi,
        disposisi.tgl_diteruskan,
        disposisi.kd_disposisi
        FROM disposisi
        LEFT JOIN surat_masuk ON surat_masuk.kd_sm=disposisi.kd_sm
        WHERE Disposisi.kd_sm='$kd_sm'");
?>
<head>
<style type="text/css">
	table, td, th {
    	border: 1px solid black;
	}

	.td {
	    vertical-align: top;
	}
</style>
</head>
<?php
    $row=mysql_fetch_array($query);
?>
<body>
	<center>
		<h2>PEMERINTAHAN KABUPATEN BOGOR<br>DINAS PEMBERDAYAAN MASYARAKAT DAN DESA</h2>
		<br>
		<table border="1" cellspacing="0">
		<tbody>
			<tr>
				<td colspan="2" width="700px" height="50" align="center">
					<h3>KARTU DISPOSISI</h3>
				</td>
			</tr>
			<tr>
				<td>Tgl Penyelesaian : <?php echo TanggalIndo(date("Y-m-d"));?></td>
				<td width="350px">Kode : <?php echo $row['kd_kelas']; ?></td>
			</tr>
			<tr>
				<td colspan="2" width="700px">Indeks : <?php echo $row['indeks']; ?></td>
			</tr>
			<tr>
				<td colspan="2">Asal : <?php echo $row['asal']; ?></td>
			</tr>
			<tr>
				<td colspan="2" width="700px" height="100px" class="td">Perihal : <br><?php echo $row['perihal']; ?></td>
			</tr>
			<tr>
				<td colspan="2" width="700px">Tanggal Surat : <?php echo TanggalIndo($row['tgl_surat']); ?></td>
			</tr>
			<tr>
				<td colspan="2" width="700px">Nomor Surat : <?php echo $row['no_surat']; ?></td>
			</tr>
			<tr>
				<td>Tanggal Penyampaian : <?php echo TanggalIndo ($row['tgl_penyampaian']); ?></td>
				<td>Pengelola : <?php echo $row['pengelola']; ?></td>
			</tr>
			<tr>
				<td height="200px" class="td">Informasi : <br><?php echo $row['isi_disposisi']; ?><br><img src="assets/images/disposisi/stempel.jpg" width="40%" height="50%"></td>
				<td height="200px" class="td">Catatan : <br><?php echo $row['instruksi']; ?>
				</td>
			</tr>
		</tbody>
	</table>
	</center>
 	
	<script>
		window.print();
	</script>
	
</body>
</html>