<?php
	session_start();
	if(!isset($_SESSION['Nama'])){
		header("location:masuk.php");
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman about</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<header>
		<ul>
			<a href="index.php"><li>Beranda</li><a/>
			<a href="profil.php"><li>Profil</li><a/>
			<a href="about.php"><li>About</li><a/>
			<a href="keluar.php"><li>Keluar</li><a/>
		</ul>
	</header>

	<section>
		<center>
			<font style="font-size:40px;">ABOUT</font>
		</center>
	</section>

	<footer>
		Copyright &copy; 2020 Sofiatun Nisa. All Rights Reserved.
	</footer>
</body>
</html>
<?php } ?>