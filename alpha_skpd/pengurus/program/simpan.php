<?php
		include "../koneksi/koneksi.php";		
		
		echo $kode = $_POST['kode'];
		echo $_POST['nama'];
		
		$simpan = mysql_query("INSERT INTO program_skpd (nama_program,id_perencanaan_kebutuhan) VALUES ( '$_POST[nama]','$_POST[kode]')");
				if($simpan){
					header ("location:../?data=program/index&&kode=$kode");
				}
				else{
					echo "
						<script language='javascript'>
							alert('Input Data gagal!');
							window.location='../?data=program/input';
						</script>
					";
				}
?>
