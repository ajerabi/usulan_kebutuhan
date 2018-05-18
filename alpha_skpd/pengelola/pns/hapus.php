<?php
	include "koneksi/koneksi.php";
	$hapus = mysql_query("delete from pns where nik = '$_GET[nik]'");
	header('location:?data=pns/index');
?>
