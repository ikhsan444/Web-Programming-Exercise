<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link rel = "stylesheet" type = "text/css" href = "main.css">
<head>
	<title>Game Penjumlahan</title>
</head>
<body>


<?php
session_start();
$_SESSION["score"] = 0;
$_SESSION["lives"] = 5;
if (isset($_COOKIE['email'])){
	$nama = $_COOKIE['nama']; 
	    echo "<p>Hallo selamat datang kembali ".$_COOKIE['nama']."</p>";
?>
	    <a class="btn btn-success" href="soal.php" role="button">Start Game</a>
	    <a class="btn btn-secondary" href="reload.php" role="button">Bukan Anda ?</a>
<?php	    
}else {
	?>
<div class="container">
	<h3>Selamat Datang di Game Penjumlahan</h3>
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5 ">
          <div class="card-body ">
            <h5 class="card-title text-center">Silakan Login Dulu</h5>
            <form class="form-signin" action="ceklogin.php" method="POST">
              <div class="form-label">
              	<label for="inputName">User Name</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="username" required autofocus>
              </div>
              <div class="form-label-group">
              	<label for="inputEmail">Email address</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="email" required autofocus>
              </div>
              <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary">
              <p class="mt-5 mb-3 text-muted">© Ujian Tengah Semester Pemrograman Web 2021</p>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
}
?>