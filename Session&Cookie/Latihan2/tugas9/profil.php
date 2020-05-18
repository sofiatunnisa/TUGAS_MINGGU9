<?php
	session_start();
	if(!isset($_SESSION['Nama'])){
		header("location:masuk.php");
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Profil</title>
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
			<font style="font-size:40px;">SELAMAT DATANG di HALAMAN PROFIL</font><br><br>
			<img alt="Gambar me" src="me.jpg" height="300" width="180" /><br><br>
			<font style="font-size:14px;">Namaku Sofiatun Nisa yang biasa dipanggil dengan banyak nama. Teman SD dan keluarga memanggilku Fia, teman SMP dan SMA memanggilku Atun, guru-guruku memanggilku Nisa dan di Kampus aku dipanggil Sofi. Aku anak pertama dari empat bersaudara dan menjadi perempuan pertama diantara sepupuku dari pihak ibu. Terlahir dari seorang Bapak yang multitalent dan Ibu yang hebat bernyanyi, oke dalam artian lain pastinya, aku dilahirkan di Demak dan tumbuh di pulau hutan hujan Kalimantan. Ikut merantau sejak kecil membuatku sulit untuk berbahasa jawa apalagi nahasa kromo, but aku bisa mengerti apa yanga di ucapkan. Aku senang membaca apalagi jika itu cerita fiksi dan aku suka menulis tapi masih perlu mengasah hal yang satu ini tentunya. Tinggal dengan kedua orangtua yang tegas dan pekerja keras membuatku menjadi sosok yang tidak menuntut tapi sebenarnya berkeinginan.Masih banyak hal yang aku inginkan mulai dari mengeksplor diri sampai dengan mengeksplor dunia. </font>
		</center>
	</section>

	<footer>
		Copyright &copy; 2020 Sofiatun Nisa. All Rights Reserved.
	</footer>
</body>
</html>
<?php } ?>