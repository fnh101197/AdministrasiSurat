<!DOCTYPE html>
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
        disposisi.kd_disposisi,
        kk_sm.lampiran
        FROM disposisi
        LEFT JOIN surat_masuk ON surat_masuk.kd_sm=disposisi.kd_sm
        LEFT JOIN kk_sm ON disposisi.kd_sm=kk_sm.kd_sm
        WHERE disposisi.kd_sm='$kd_sm'");
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
				<td colspan="2" align="center">
					<h3>KARTU KENDALI SURAT MASUK</h3>
				</td>
			</tr>
			<tr>
				<td colspan="2"><b>Indeks</b> : <?php echo $row['indeks']; ?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Asal</b> : <?php echo $row['asal']; ?></td>
			</tr>
			<tr>
				<td colspan="2" height="100px" class="td"><b>Perihal</b> : <br><?php echo $row['perihal']; ?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Tanggal Surat</b> : <?php echo TanggalIndo($row['tgl_surat']); ?></td>
			</tr>
			<tr>
				<td width="350"><b>Nomor Surat</b> : <?php echo $row['no_surat']; ?></td>
				<td width="350"><b>Lampiran</b> : <?php echo $row['lampiran']; ?></td>
			</tr>
			<tr>
				<td><b>Pengelola</b> : <?php echo $row['pengelola']; ?></td>
				<td><b>Tanggal Diteruskan</b> : <?php echo TanggalIndo ($row['tgl_diteruskan']); ?></td>
			</tr>
			<tr>
				<td height="100px" class="td"><b>Informasi</b> : <br><?php echo $row['isi_disposisi']; ?></td>
				<td height="100px" class="td"><b>Catatan</b> : <br><?php echo $row['instruksi']; ?></td>
			</tr>

			<!-- <tr>
				<td width="300px" height="200px" class="td">Instruksi : </td>
				<td width="300px" height="200px">

				</td>
			</tr> -->
			<tr>
				
			</tr>
		</tbody>
	</table>
	</center>
 	
	<script>
		window.print();
	</script>
	
</body>
</html>