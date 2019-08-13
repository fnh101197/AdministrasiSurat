<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Kode</th>
			<th>Kelas</th>
			<th>No.Surat</th>
			<th>Tanggal Surat</th>
			<th>Perihal</th>
			<th>Tampat Simpan</th>
			<th>Tanggal Penyampaian</th>
			<th>Pengelola</th>
			<th>Tujuan</th>
			<th>Gambar</th>
			<?php
					//koneksi ke database
					include 'koneksi.php';
					
					//query menampilkan data
					$sql = mysql_query("SELECT * FROM surat_keluar");
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$data['kd_sk'].'</td>
							<td>'.$data['kd_kelas'].'</td>
							<td>'.$data['no_surat'].'</td>
							<td>'.$data['tgl_surat'].'</td>
							<td>'.$data['perihal'].'</td>
							<td>'.$data['tempat_simpan'].'</td>
							<td>'.$data['tgl_penyampaian'].'</td>
							<td>'.$data['pengelola'].'</td>
							<td>'.$data['tujuan'].'</td>
							<td>'.$data['gambar'].'</td>
						</tr>
						';
					}
					?>
		</tr>
	</table>
</body>
</html>