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
		<title>Prefilling Text Field</title>
	</head>
	<body>
    	<!-- action pada file itu sendiri, pengiriman data melalui metode POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        	<!--validasi php pada value input text untuk prefilling inputan yang telah diinputkan agar tampil pada input text -->
			Nama <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '' ?>"/>
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['nama'])){ //validasi digunakan jika ada input nilai variabel
				echo $_POST['nama'];
			}
		?>
	</body>
</html>