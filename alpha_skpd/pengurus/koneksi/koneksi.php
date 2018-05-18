<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db-SKPD";
	$koneksi = mysql_connect($host,$user,$pass) or die ("Koneksi tidak dapat dilakukan".mysql_error());
	$konekdb = mysql_select_db($db) or die ("Database tidak ditemukan".mysql_error());
	
?>
