<?php
	include "/koneksi/koneksi.php";
	$edit = mysql_query("SELECT * FROM kegiatan_program WHERE id_kegiatan = '$_GET[kode]' AND id_program = '$_GET[kode2]' ");
	$data = mysql_fetch_array($edit);
?>
<html>
	<head>
    	<title>Edit Data Barang</title>
    </head>
    <body>
    	<h2 align=center>Edit Data Barang  </h2>
        <form method='POST' action='kegiatan/update.php'>
            <table align=center border=0 cellpadding=20>
				<tr>
					<td>kode</td>
					<td>:</td>
					<td><input type="text" name="kode" readonly value="<?php echo $_GET['kode2']; ?>"></td>
				</tr>
				<tr>
					<td>Kode Kegiatan</td>
					<td>:</td>
					<td><input type="text" name="id" readonly value="<?php echo $_GET['kode']; ?>"></td>
				</tr>
				<tr>
					<td>Nama Kegiatan</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $data['nama_kegiatan'];?>"></td>
				</tr>
				<tr>
					<td>Output Kegiatan</td>
					<td>:</td>
					<td><input type="text" name="output" value="<?php echo $data['output_kegiatan'];?>"></td>
				</tr>
			</table>
            <h2 align=center>
                <input type=submit value='Update'>
                <input type=button value='Batal' onclick='self.history.back()'>
            </h2>
        </form>
    </body>
</html>