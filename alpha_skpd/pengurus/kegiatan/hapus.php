<?php
	include "koneksi/koneksi.php";
	$hapus = mysql_query("delete from kegiatan_program where id_kegiatan = '$_GET[kode]'");
	header("location:?data=kegiatan/index&&kode=$_GET[kode2]");
?>
