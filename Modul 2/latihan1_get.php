<!DOCTYPE html>
<html>
<!-- 
Algoritma Program Pengaksesan Data dengan metode GET
 1. Mulai
 2. Input Nilai
 3. Klik Ok untuk submit
 4. Muncul variabel dan nilai yang diinput sebelumnya
 5. Selesai
-->
	<head>
		<title>Metode GET</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
			Nama <input type="text" name="nama" /><!--form akan ditangani current scrir-->
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_GET['nama'])){ //validasi digunakan jika ada input nilai variabel
				echo 'Hallo '. $_GET['nama'];
			}
		?>
	</body>
</html>