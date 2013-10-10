<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Input Nilai
 3. Klik Ok untuk submit
 4. Muncul variabel dan nilai yang diinput sebelumnya
 5. Selesai
-->
	<head>
		<title>Identifikasi Metode</title>
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method GET -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
			Nama <input type="text" name="nama" /><!--form akan ditangani current scrir-->
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_REQUEST['nama'])){ //validasi digunakan jika ada input nilai variabel
				echo 'Metode '. $_SERVER['REQUEST_METHOD'];
			}
		?>
	</body>
</html>