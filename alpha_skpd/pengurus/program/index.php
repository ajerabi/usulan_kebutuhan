<?php
	include("/koneksi/koneksi.php");
	$kode = $_GET['kode'];
?>

<html>
	<head>
		<title>Daftar Program</title>
	</head>
	<body>
		<h2 align = "center">Daftar Program Yang Ada</h2>
		<?php
			$tampil = mysql_query("select perencanaan.id_perencanaan_kebutuhan, skpd.nama_skpd, perencanaan.tahun from perencanaan_kebutuhan perencanaan, skpd skpd where perencanaan.id_skpd=skpd.id_skpd and id_perencanaan_kebutuhan = $_GET[kode]");
			if ($data = mysql_fetch_array($tampil)){
		?>
		<h2 align = "center"><?php echo $data['nama_skpd'];?></h2>
		<h2 align = "center">Tahun<?php echo $data['tahun'];?></h2>        
		<?php
			}
		?>
		<table align = "center" border = "0" cellpadding = "20">
			<tr>
				<th>No</th>
				<th>Nama Program</th>
				
			</tr>
			<?php
				$tampil = mysql_query(" SELECT * FROM program_skpd WHERE id_perencanaan_kebutuhan =  $_GET[kode] ");
				$no = 0;
				while ($data = mysql_fetch_array($tampil)){
				$no++;
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['nama_program']; ?></td>
				<td>
				<?php echo"<a href=?data=kegiatan/index&&kode=$data[id_program]&&kode2=$kode>Lihat Kegiatan</a>"; ?> | 
				<?php echo"<a href=?data=program/edit&&kode=$data[id_program]&&kode2=$kode>Edit</a>"; ?> | 
				<?php echo"<a href=\"?data=program/hapus&&kode=$data[id_program]&&kode2=$kode\" onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data?')\">Hapus</a>"; ?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<h2 align=center>
			<a href="?data=program/input&&kode=<?php echo $kode?>"><button>Tambah</button></a>
		</h2>
	</body>
</html>

<?php

?>