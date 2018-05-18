<?php
	include "/koneksi/koneksi.php";
	$edit = mysql_query("select * from barang where kode_barang='$_GET[kode]'");
	$data = mysql_fetch_array($edit);
?>
<html>
	<head>
    	<title>Edit Data Barang</title>
    </head>
    <body>
    	<h2 align=center>Edit Data Barang  </h2>
        <form method='POST' action='barang/update.php'>
            <table align=center border=0 cellpadding=20>
				<tr>
					<td>Kode</td>
					<td>:</td>
					<td><input type='text' name='kode' readonly value='<?php echo "$data[kode_barang]"; ?>'></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value='<?php echo "$data[nama_barang]"; ?>'></td>
				</tr>
            </table>
            <h2 align=center>
                <input type=submit value='Update'>
                <input type=button value='Batal' onclick='self.history.back()'>
            </h2>
        </form>
    </body>
</html>