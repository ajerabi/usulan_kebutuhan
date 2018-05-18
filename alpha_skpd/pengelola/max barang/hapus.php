<?php
	include "koneksi/koneksi.php";
	$hapus = mysql_query("delete from max_barang where kode_barang = '$_GET[kode]'");
	header("location:?data=max%20barang/index&&kode=$_GET[kode2]");
?>
