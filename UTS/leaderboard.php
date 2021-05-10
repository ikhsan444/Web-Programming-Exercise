<?php
include('config.php');
$result = mysqli_query($conn, "SELECT nama,email,score FROM data_tebak ORDER BY score DESC LIMIT 10"); 
 ?> 
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> 
<link rel = "stylesheet" type = "text/css" href = "main.css">
 
<body>
    <div class="container">
        <div class="card card-signin my-5 ">
          <div class="card-body ">
            <div class="soal">
    <p> Sayang Sekali Permainan Sudah Selesai</p>
    <p>Terimakasih Telah Bermain</p>   
    <h1 style=" text-align: center; color: aqua;">Leaderboard  Player</h1>
    <table align="center" width='80%' border=2> 
 
    <tr>
        <th>No</th>
    	<th>Nama</th>
    	<th>Score</th>     
    </tr>     
    <?php
    $a = 1;       
    while($row = mysqli_fetch_assoc($result)) {                   
    	echo "<tr>";           
    	echo "<td>".$a++."</td>";         
    	echo "<td>".$row['nama']."</td>";         
    	echo "<td>".$row['score']."</td>";
        echo "<tr>";}    
        ?>
      </table>     
<a style="margin-right: 10px, margin-top:20px; " class="btn btn-success" href="ulang.php" role="button">Mulai Lagi</a>
<a style="margin-right: 10px, margin-top:20px;" class="btn btn-danger" href="reload.php" role="button">Logout</a>
</div>
</div>
</div>
</div>
</body>
</html>