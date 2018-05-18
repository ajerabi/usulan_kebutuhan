<?php
	include("/koneksi/koneksi.php");
?>

<html>
	<head>
		<title>Daftar Barang </title>
	</head>
	<body>
		<h2 align = "center">Daftar Barang</h2>        
		<table align = "center" border = "0" cellpadding = "20">
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				
			</tr>
			<?php
				$tampil = mysql_query("select * from barang order by kode_barang desc");
				$no = 0;
				while ($data = mysql_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['kode_barang']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td>
				<?php echo"<a href=?data=barang/edit&&kode=$data[kode_barang]>Edit</a>"; ?> | 
				<?php echo"<a href=\"?data=barang/hapus&&kode=$data[kode_barang]\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<h2 align=center>
			<a href="?data=barang/input"><button>Tambah</button></a> | <a href="../index.php"><button>Menu</button></a>
		</h2>
	</body>
</html>