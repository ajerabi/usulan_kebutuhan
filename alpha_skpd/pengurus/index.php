<?php
	session_start();
	if($_SESSION['level']==1 and $_SESSION['login']=='aktif'){
	$rencana = 'perencanaan/index';
	$pengajuan = 'pengajuan/index';
?>

<html>
	<head>
		<title>Halaman Pengurus</title>
		<link href="assets/css/styles.css" rel="stylesheet"/>

	</head>
	<body>
		<section id="page">
			<aside>
			<ul>
				<li><a href="?data=<?php echo $pengajuan; ?>">Pengajuan</a></li>
				<li><a href="?data=<?php echo $rencana; ?>">Perencanaan</a></li>
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