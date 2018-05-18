<?php
	include "koneksi/koneksi.php";
	$hapus = mysql_query("delete from barang where kode_barang = '$_GET[kode]'");
	header('location:?data=pns/index');
?>
