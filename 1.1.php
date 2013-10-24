<?php

//Men-set nilai cookie
setcookie ('nama_cookie', 'nilai_cookie');
?>

<!DOCTYPE html
	PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/html" xml:lang="en" lang="en">

<head>
	<title>Set Cookie</title>
</head>

<body>

<?php
//Medapatkan nilai cookie
echo $_COOKIE['nama_cookie'];

?>

<p>
Tekan Refresh (F5);

</body>

</html>