<?php
	include("/koneksi/koneksi.php");
?>

<html>
	<head>
		<title>Daftar Pengajuan </title>
	</head>
	<body>
		<h2 align = "center">Daftar Pengajuan</h2>        
		<table align = "center" border = "0" cellpadding = "20">
			<tr>
				<th>No</th>
				<th>Nama SKPD</th>
				<th>Tahun</th>
				
			</tr>
			<?php
				$tampil = mysql_query("select perencanaan.id_perencanaan_kebutuhan, skpd.nama_skpd, perencanaan.tahun from perencanaan_kebutuhan perencanaan, skpd skpd where perencanaan.id_skpd=skpd.id_skpd");
				$no = 0;
				while ($data = mysql_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nama_skpd']; ?></td>
				<td><?php echo $data['tahun']; ?></td>
				<td>
				<?php echo"<a href=?data=max%20barang/index&&kode=$data[id_perencanaan_kebutuhan]>Tambah Barang</a>"; ?> | 
				<?php echo"<a href=\"?data=pengajuan/hapus&&kode=$data[id_perencanaan_kebutuhan]\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<h2 align=center>
			<a href="?data=pengajuan/input"><button>Tambah</button></a>
		</h2>
	</body>
</html>