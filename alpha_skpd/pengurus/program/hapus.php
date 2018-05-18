<?php
	include "koneksi/koneksi.php";
	$hapus = mysql_query("delete from program_skpd where id_program = '$_GET[kode]'");
	header("location:?data=program/index&&kode=$_GET[kode2]");
?>
