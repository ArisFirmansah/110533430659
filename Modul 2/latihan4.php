<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Pilih ListBox Pekerjaan
 3. Klik Ok untuk submit
 4. Muncul Pekerjaan yang telah dipilih sebelumnya
 5. Selesai
-->
	<head>
		<title>Data Seleksi</title>
	</head>
	<body>
    	<!-- pengiriman data melalui metode POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Pekerjaan 
			<select name="job">
				<option value="Mahasiswa">Mahasiswa</option>
				<option value="ABRI">ABRI</option>
				<option value="PNS">PNS</option>
				<option value="Swasta">Swasta</option>
			</select>
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['job'])){ //validasi digunakan untuk inputan yang nama variabelnya "job".
				echo $_POST['job'];
			}
		?>
	</body>
</html>