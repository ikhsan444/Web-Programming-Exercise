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
	if ($_SESSION["lives"] == 0) {
		header('Location: gameover.php');
	}

	$numA = rand(0,20);
	$numB = rand(0,20);
	$hasil = $numA + $numB;
	$_SESSION["hasil"] = $hasil;
?>
<div class="container">
        <div class="card card-signin my-5 ">
          <div class="card-body ">
          	<div class="soal">
<form action="cekjwb.php" method="POST">
                <h5>Hallo <?php echo $_COOKIE["nama"];?>, tetap semangat ya...you can do the best!!!</h5>
                <h5>Lives: <?php echo $_SESSION["lives"];?> | Score: <?php echo $_SESSION["score"];?></i></h5>
                <label>Berapakah <?php echo $numA; ?> + <?php echo $numB; ?> =</label>
                <input name="hasil" placeholder="Masukkan Jawaban" type="number">
                <button class="btn btn-outline-primary" type="submit" value="submit">Jawab</button>
</form>
</div>
</div>
</div>

</body>
</html>