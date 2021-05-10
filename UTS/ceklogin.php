<?php
session_start();
if($_POST['submit']){
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	setcookie('nama', $nama, time()+3*30*24*3600,"/");
	setcookie('email', $email, time()+3*30*24*3600,"/");
	header('Location: soal.php');
}
