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
?>
<div class="container">
        <div class="card card-signin my-5 ">
          <div class="card-body ">
          	<div class="soal">
<?php

echo "Hallo " .$_COOKIE['nama']. ", Selamat jawaban anda benar!!!";
echo "Lives: " .$_SESSION['lives']. " | Score: " .$_SESSION["score"];
echo "<a href='soal.php'> Soal berikutnya</a>";

?>
</div>
</div>
</div>
</div>
</body>
</html>