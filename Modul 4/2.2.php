<!DOCTYPE html
	public "-//W3C/DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/html" xml:lang="en" lang="en">

<head>
	<title>Hapus Session</title>
</head>

<body>

<?php

//Inisialisai data session
session_start ();

//Set session jika belum ada
if (isset ($_SESSION['test'])) {

	//Hapus session test
	unset ($_SESSION)['test']);
	
	echo 'session dihapus';
	
} else {
	echo 'unset';
	
	//Mencetak semua elemen session
	print_r($_SESSION);
}

?>
Tekan Refresh (F5);

</body>

</html>
