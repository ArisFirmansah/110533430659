<!DOCTYPE html>
<html>
<!-- 
Algoritma Program Menggunakan Metode POST
 1. Mulai
 2. Input Nilai
 3. Klik Ok untuk submit
 4. Muncul variabel dan nilai yang diinput sebelumnya
 5. Selesai
-->
	<head>
		<title>Metode POST</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"><!--form ditangani oleh current scrir-->
			Nama <input type="text" name="nama" />
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['nama'])){ //validasi digunakan jika ada input nilai variabel
				echo 'Hallo '. $_POST['nama'];
			}
		?>
	</body>
</html>