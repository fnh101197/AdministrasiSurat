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
			<th>tgl.surat</th>
			<th>tgl.terima</th>
			<th>asal</th>
			<th>Perihal</th>
			<th>tgl.pelaksanaan</th>
			<th>jam pelaksanaan</th>
			<th>tempat</th>
			<th>tgl.penyampaian</th>
			<th>isi disposisi</th>
			<?php
					//koneksi ke database
					include 'koneksi.php';
					
					//query menampilkan data
					$sql = mysql_query("SELECT * FROM surat_masuk");
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$data['kd_sm'].'</td>
							<td>'.$data['kd_kelas'].'</td>
							<td>'.$data['no_surat'].'</td>
							<td>'.$data['tgl_surat'].'</td>
							<td>'.$data['tgl_terima'].'</td>
							<td>'.$data['asal'].'</td>
							<td>'.$data['perihal'].'</td>
							<td>'.$data['tgl_pelaksanaan'].'</td>
							<td>'.$data['jam_pelaksanaan'].'</td>
							<td>'.$data['tempat'].'</td>
							<td>'.$data['tgl_penyampaian'].'</td>
							<td>'.$data['isi_disposisi'].'</td>
						</tr>
						';
					}
					?>
		</tr>
	</table>
</body>
</html>