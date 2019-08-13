<!DOCTYPE html>
<html>
<?php 
include "koneksi.php";
include "tgl-indo.php";
    $kd_sk=$_GET['kd_sk'];
    $query=mysql_query("SELECT
    	surat_keluar.tgl_surat,
    	surat_keluar.kd_kelas,
    	surat_keluar.no_surat,
    	surat_keluar.tgl_surat,
    	surat_keluar.perihal,
    	surat_keluar.pengelola,
    	surat_keluar.tujuan,
        kk_sk.indeks,
        kk_sk.lampiran,
        kk_sk.catatan
        FROM surat_keluar
        LEFT JOIN kk_sk ON surat_keluar.kd_sk=kk_sk.kd_sk
        WHERE surat_keluar.kd_sk='$kd_sk'");
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
					<h3>KARTU KENDALI SURAT KELUAR</h3>
				</td>
			</tr>
			<tr>
				<td><b>Indeks</b> : <?php echo $row['indeks']; ?></td>
				<td><b>Kode</b> : <?php echo $row['kd_kelas']; ?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Tujuan</b> : <?php echo $row['tujuan']; ?></td>
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
				<td colspan="2"><b>Pengelola</b> : <?php echo $row['pengelola']; ?></td>
			</tr>
			<tr>
				<td colspan="2" height="100px" class="td"><b>Catatan</b> : <br><?php echo $row['catatan']; ?></td>
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