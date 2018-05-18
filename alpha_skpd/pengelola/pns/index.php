<?php
	include("/koneksi/koneksi.php");
?>

<html>
	<head>
		<title>Daftar PNS</title>
	</head>
	<body>
		<h2 align = "center">Data PNS</h2>        
		<table align = "center" border = "0" cellpadding = "30">
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama</th>
				<th>SKPD</th>
				<th>Jabatan</th>
				<th>Eselon</th>
				<th>Aksi</th>
			</tr>
			<?php
				$tampil = mysql_query("select * from pns order by nik");
				$no = 0;
				while ($data = mysql_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nik']; ?></td>
				<td><?php echo $data['nama_pns']; ?></td>
				<td><?php echo $data['skpd']; ?></td>
				<td><?php echo $data['jabatan']; ?></td>
				<td><?php echo $data['eselon']; ?></td>
				<td>
				<?php echo"<a href=?data=pns/edit&&nik=$data[nik]>Edit</a>"; ?> | 
				<?php echo"<a href=\"?data=pns/hapus&&nik=$data[nik]\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus $data[nama_pns]?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<h2 align=center>
			<a href="?data=pns/input"><button>Tambah</button></a> | <a href="../index.php"><button>Menu</button></a>
		</h2>
	</body>
</html>