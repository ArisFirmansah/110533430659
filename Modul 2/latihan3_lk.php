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
		<title>Prefill Data Radio Button</title>
	</head>
	<body>
    	<!-- pengiriman data melalui metode POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Jenis Kelamin 
            <!-- terdapat validasi php pada masing-masing checkbox yang digunakan untuk prefilling inputan yang telah dipilih tetap ditandai dengan menambahkan attribut checked -->
			<input type="radio" name="sex" value="Pria" <?php if($_POST['sex']=='Pria')echo"checked"; ?> />Pria 
			<input type="radio" name="sex" value="Wanita" <?php if($_POST['sex']=='Wanita')echo"checked"; ?> />Wanita
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