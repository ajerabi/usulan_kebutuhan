<?php
		include "../koneksi/koneksi.php";		
		
		echo $kode = $_POST['kode'];
		echo $_POST['nama'];
		echo $_POST['output'];

		$simpan = mysql_query("INSERT INTO kegiatan_program (nama_kegiatan,output_kegiatan,id_program) VALUES ( '$_POST[nama]', '$_POST[output]', '$_POST[kode]')");
				if($simpan){
					header ("location:../?data=kegiatan/index&&kode=$kode");
				}
				else{
					echo "
						<script language='javascript'>
							alert('Input Data gagal!');
							window.location='../?data=kegiatan/input';
						</script>
					";
				}
?>
