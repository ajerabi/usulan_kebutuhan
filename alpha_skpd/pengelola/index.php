<?php
	session_start();
	if($_SESSION['level']==0 and $_SESSION['login']=='aktif'){
	$pns = 'pns/index';
	$kendaraan = 'kendaraan/index';
	$pengajuan = 'pengajuan/index';
	$barang = 'barang/index';
?>

<html>
	<head>
		<title>Halaman Admin</title>
		<link href="assets/css/styles.css" rel="stylesheet"/>

	</head>
	<body>
		<section id="page">
			<aside>
			<ul>
				<li><a href="?data=<?php echo $pns; ?>">Karyawan</a></li>
				<li><a href="?data=<?php echo $pengajuan; ?>">Pengajuan</a></li>
				<li><a href="?data=<?php echo $barang; ?>">Barang</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
			</aside>
			<div id="main">
				<center>
				<?php
				if(isset($_GET['data'])){
					include ($_GET['data'] . ".php");
				}
				?>
				</center>
			</div>
		</section>
	
	</body>
</html>

<?php	
}else{
		echo "
		<script language='javascript'>
			alert('Anda tidak berhak mengakses');
			window.location='../index.php';
		</script>
		";
} 
?>