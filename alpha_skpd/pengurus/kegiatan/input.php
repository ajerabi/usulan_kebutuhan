<?php
	include("/koneksi/koneksi.php");
?>

<html>
	<head>
		<title>Input Data Barang</title>
	</head>
	<body>
		<form method="POST" action="kegiatan/simpan.php">
			<table align="center" border="0" cellpadding="20">
				<tr>
					<td>kode</td>
					<td>:</td>
					<td><input type="text" name="kode" readonly value="<?php echo $_GET['kode']; ?>"></td>
				</tr>
				<tr>
					<td>Nama Kegiatan</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Output Kegiatan</td>
					<td>:</td>
					<td><input type="text" name="output"></td>
				</tr>				
				<tr>
					<td><h2 colspan=2 align=center><input type=Submit value=Simpan> <input type=button value=Batal onclick=self.history.back()></h2></td>
				</tr>
			</table>
		</form>
	</body>
</html>


