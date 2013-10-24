<!DOCTYPE html
	public "-//W3C/DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/html" xml:lang="en" lang="en">

<head>
	<title>Hapus Cookie</title>
</head>

<body>

<?php

setcookie ('nama_cookie', 'nilai_cookie');

if (isset ($_COOKIE['nama_cookie'])) {
	echo 'cookie di-set <br />';
	//mengapus cookie, dengan masa berlaku 3 jam yang lalu
	setcookie('nama_cookie','',time()-3*3600);
	echo 'cookie dihapus';
	
} else {
	echo 'unset';
}

?>

<p>
Tekan Refresh (F5);

</body>

</html>
	