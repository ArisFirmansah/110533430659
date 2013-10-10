<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Pilih Checkbox hobby (bisa lebih dari satu)
 3. Klik Ok untuk submit
 4. Muncul Hobby yang telah dipilih sebelumnya
 5. Selesai
-->
	<head>
		<title>Data Checkbox</title>
	</head>
	<body>
    	<!-- Pengiriman data melalui metode POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Hobby 
            <!-- Diberi array agar dapat diproses pemilihan lebih satu -->
			<input type="checkbox" name="hobby[]" value="Membaca" /> Membaca
			<input type="checkbox" name="hobby[]" value="Olahraga" /> Olahraga
			<input type="checkbox" name="hobby[]" value="Menyanyi" /> Menyanyi
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['hobby'])){ //validasi digunakan untuk inputan yang nama variabelnya "hobby".
				foreach($_POST['hobby'] as $key => $val) //perulangan menggunakan foreach yg akan mengulang "hobby" sebelumnya dipilih lalu akan menampilkan
					echo $key . '->' . $val . '<br />';
				echo $_POST['job'];
			}
		?>
	</body>
</html>