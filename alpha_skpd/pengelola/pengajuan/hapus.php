<?php
	include "koneksi/koneksi.php";
	$hapus = mysql_query("delete from pengajuan_perencanaan where id_pengajuan_perencanaan = '$_GET[kode]'");
	header('location:?data=pengajuan/index');
?>
