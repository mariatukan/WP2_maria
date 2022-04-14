<html>

<head>
	<title>Tampilkan Data Mtakuliah</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					Tampil Data Matskuliah
				</th>
				<tr>
					<td colspam="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th>Kode MTK</th>
					<th>:</th>
					<td>
						<?= $Kode; ?>
					</td>
				</tr>
				<tr>
					<td>Nama MTK</td>
					<td>:</td>
					<td>
						<?= $nama; ?>
					</td>
				</tr>
				<tr>
					<td>SKS</td>
					<td>:</td>
					<td>
						<?=$sks; ?>
					</td>
				</tr>
				<tr>
					<td colspan="3"  align="center">
						<a href="<?= base_url('matakuliah');
			?>">kembali</a>
				    </td>
				</tr>
			</table>
		</center>
</body>
</html>


