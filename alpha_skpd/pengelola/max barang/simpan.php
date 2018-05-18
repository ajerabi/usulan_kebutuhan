<?php
		include "../koneksi/koneksi.php";		
		
		echo $kode = $_POST['kode'];
		echo $_POST['barang'];
		echo $_POST['jumlah'];
		echo $_POST['satuan'];
		
		$simpan = mysql_query("INSERT INTO max_barang VALUES ( '$_POST[kode]', '$_POST[barang]', '$_POST[jumlah]', '$_POST[satuan]')");
				if($simpan){
					header ("location:../?data=max%20barang/index&&kode=$kode");
				}
				else{
					echo "
						<script language='javascript'>
							alert('Input Data gagal!');
							window.location='../?data=max%20barang/input';
						</script>
					";
				}
?>
