<?php
		include "../koneksi/koneksi.php";		
		$_POST['skpd'];
		$_POST['tahun'];
		
		INSERT INTO perencanaan_kebutuhan (id_skpd, tahun)
		SELECT * FROM (SELECT '$_POST[skpd]', '$_POST[tahun]') AS tmp
		WHERE NOT EXISTS (
			SELECT id_skpd , tahun FROM perencanaan_kebutuhan WHERE id_skpd = '$_POST[skpd]' AND tahun = '$_POST[tahun]' 
		) LIMIT 1;
		
		$simpan = mysql_query(" INSERT INTO perencanaan_kebutuhan (id_skpd, tahun)
								SELECT * FROM (SELECT '$_POST[skpd]', '$_POST[tahun]') AS tmp
								WHERE NOT EXISTS (
									SELECT id_skpd , tahun FROM perencanaan_kebutuhan WHERE id_skpd = '$_POST[skpd]' AND tahun = '$_POST[tahun]' 
								) LIMIT 1
								");
				if($simpan){
					header ('location:../?data=pegajuan/index');
				}
				else{
					echo "
						<script language='javascript'>
							alert('Input Data gagal!');
							window.location='../?data=pegajuan/input';
						</script>
					";
				}
?>
