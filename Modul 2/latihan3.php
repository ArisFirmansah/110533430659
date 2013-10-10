<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Pilih Radio Button Jenis Kelamin
 3. Klik Ok untuk submit
 4. Muncul jenis kelamin yang telah dipilih sebelumnya
 5. Selesai
-->
	<head>
		<title>Data Radio Button</title>
	</head>
	<body>
    	<!--pengiriman data melalui metode POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Jenis Kelamin <input type="radio" name="sex" value="Pria" />Pria <input type="radio" name="sex" value="Wanita" />Wanita
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['sex'])){ //validasi digunakan untuk inputan yang nama variabelnya "sex".
				echo $_POST['sex'];
			}
		?>
	</body>
</html>