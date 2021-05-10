<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link rel = "stylesheet" type = "text/css" href = "main.css">
<head>
	<body>
    <div class="container">
        <div class="card card-signin my-5 ">
          <div class="card-body ">
            <div class="soal">
<?php
session_start();
$_SESSION["score"] = 0;
$_SESSION["lives"] = 5;
?>
<?php
	    echo "<p>Hallo selamat datang kembali di game ini".$_COOKIE['nama']."</p>";
	    ?>
	   	<a class="btn btn-success" href="soal.php" role="button">Start Game</a>
	    <a class="btn btn-secondary" href="reload.php" role="button">Bukan Anda ?</a>
	</div>
</div>
</div>
</div>
</body>
</head>
</html>
