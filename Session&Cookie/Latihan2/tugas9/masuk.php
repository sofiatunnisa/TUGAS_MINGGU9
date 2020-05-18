<?php
	session_start();
	if(isset($_SESSION['nama'])){
		echo "Anda Belum Keluar! Silahkan <a href='index.php'>Keluar</a> Dulu!";
	}else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Masuk</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
		<div class="box-login">
			<center>
			<font style="font-size: 30px;color: #000000; ">Silahkan Login</font></center><br>
			<form action="" method="post">
				<img alt="Gambar ketik" src="ketik.jpeg" height="250" width="540" /><br>
				<input type="text" name="Username" placeholder="Masukkan Username Anda"/><br>
				<input type="password" name="Password" placeholder="Masukkan Password Anda"/><br><br>
				<input type="submit" name="masuk" value="Login"/><br>
				
			</form>
			<?php
				include "koneksi.php";
				if (isset($_POST['masuk'])){
						$cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE
						Username = '".$_POST['Username']."' AND Password ='".$_POST['Password']."'");
						$hasil = mysqli_fetch_array($cek);
						$count = mysqli_num_rows($cek);
						$nama_user = $hasil ['Nama'];
						if($count > 0){
							session_start();
							$_SESSION['Nama'] = $nama_user;
							header("location:index.php");
					}else{
						echo "Gagal Masuk";
				}
			}
			?>
		</div>

</body>
</html>
<?php } ?>