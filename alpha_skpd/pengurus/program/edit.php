<?php
	include "/koneksi/koneksi.php";
	$edit = mysql_query(" SELECT * FROM program_skpd WHERE id_program = '$_GET[kode]'");
	$data = mysql_fetch_array($edit);
?>
<html>
	<head>
    	<title>Edit Data Program Kegiatan</title>
    </head>
    <body>
    	<h2 align=center>Edit Data Program Kegiatan</h2>
        <form method='POST' action='program/update.php'>
            <table align=center border=0 cellpadding=20>
				<tr>
					<td>kode</td>
					<td>:</td>
					<td><input type="text" name="kode" readonly value="<?php echo $_GET['kode2']; ?>"></td>
				</tr>
				<tr>	
					<td>Kode Program</td>
					<td>:</td>
					<td>
						<input type="text" name="id" readonly value="<?php echo $data['id_program']; ?>">
					</td>
				</tr>				<tr>	
					<td>Nama Program</td>
					<td>:</td>
					<td>
						<input type="text" name="nama" value="<?php echo $data['nama_program']; ?>">
					</td>
				</tr>
            </table>
            <h2 align=center>
                <input type=submit value='Update'>
                <input type=button value='Batal' onclick='self.history.back()'>
            </h2>
        </form>
    </body>
</html>