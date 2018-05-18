<?php
	include("/koneksi/koneksi.php");
	$kode = $_GET['kode'];
?>

<html>
	<head>
		<title>Daftar Kegiatan </title>
	</head>
	<body>
		<h2 align = "center">Daftar Kegiatan</h2>
		<?php
			$tampil = mysql_query(" SELECT prog.nama_program, prog.id_perencanaan_kebutuhan, skpd.nama_skpd, rencana.tahun 
									FROM program_skpd prog, perencanaan_kebutuhan rencana, skpd
									WHERE prog.id_program = $_GET[kode] AND prog.id_perencanaan_kebutuhan = rencana.id_perencanaan_kebutuhan AND rencana.id_skpd = skpd.id_skpd");
			if ($data = mysql_fetch_array($tampil)){
		?>
		<h2 align = "center"><?php echo $data['nama_skpd'];?></h2>
		<h2 align = "center">Tahun <?php echo $data['tahun'];?></h2>
		<h2 align = "center">Program <?php echo $data['nama_program'];?></h2>        
		<?php
			}
		?>
		<table align = "center" border = "0" cellpadding = "20">
			<tr>
				<th>No</th>
				<th>Nama Kegiatan</th>
				<th>Output Kegiatan</th>
			</tr>
			<?php
				$tampil = mysql_query(" SELECT * FROM kegiatan_program WHERE id_program = $_GET[kode] order by nama_kegiatan desc");
				$no = 0;
				while ($data = mysql_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nama_kegiatan']; ?></td>
				<td><?php echo $data['output_kegiatan']; ?></td>
				<td>
				<?php echo"<a href=?data=kegiatan/edit&&kode=$data[id_kegiatan]&&kode2=$kode>Edit</a>"; ?> | 
				<?php echo"<a href=\"?data=kegiatan/hapus&&kode=$data[id_kegiatan]&&kode2=$kode\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<h2 align=center>
			<a href="?data=kegiatan/input&&kode=<?php echo $kode?>"><button>Tambah</button></a>
		</h2>
	</body>
</html>

<?php

?>