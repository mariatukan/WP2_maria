<html>

<head>
	<title>From Input matakuliah</title>
</head>

<body>
	<center>
		<form   action="<?=  base_url('matakuliah/cetak');      ?>"
			methode="post">
			          <table>
			          	<tr>
			          		<th colspan="3">
			          			Form Input Data Mata Kuliah
			          		</th>
			          	</tr>
			          	<tr>
			          		<td colspan="3">
			          		<hr>
			          	  </td>
			          	</tr>
			          	<tr>
			          		<th>Kode MTK</th>
			          		<th>:</th>
			          		<td>
			          			<input type="text" name="kode" id="kode" placeholder="Input Kode">
			          		</td>
			          	</tr>
			          	<tr>
			          		<th>Nama MTK</th>
			          		<td>:</td>
			          		<td>
			          			<input type="text" name="nama" id="nama">
			          		</td>
			          	</tr>
			          	<tr>
			          		<th>SKS</th>
			          		<td>:</td>
			          		<td>
			          			<select name="sks id="sks>
			          				<option value="">PILIH SKS</option>
			          				<option value="2">PILIH SKS</option
			          				<option value="3">PILIH SKS</option>
			          				<option value="4">PILIH SKS</option>
			          			</select>
			          		</td>
			          	</tr>
			          	<tr>
			          		<td colspan="3"  align="center">
			          			<input type="submit" value="submit">
			          		</td>
			         </table>
			      </form>
			 </center>
		</body>

 </html>

