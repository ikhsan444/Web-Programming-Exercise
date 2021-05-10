<?php
include('config.php');
session_start();
$nama =$_COOKIE['nama'];
$email=$_COOKIE['email'];
$score=$_SESSION['score'];
$ql="INSERT INTO data_tebak(nama,email,score) VALUES ('".$nama."','".$email."','".$score."')";
mysqli_query($conn,$ql);
header('Location: leaderboard.php');
 ?> 
 
