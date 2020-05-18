<?php
	$conn = mysqli_connect('localhost','root','','db_php');
	if(!$conn){
		echo 'gagal terhubung ke database';
	}
?>