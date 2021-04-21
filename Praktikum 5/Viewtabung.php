<html>
<body>
<h1>DATA UKURAN TABUNG</h1>
<table  border="1" >
<tr>
	<th>Nama Tabung</th>
	<th>Diameter</th>
	<th>Tinggi</th>
	<th>Luas</th>
</tr>
<?php 
	$namaFile ="tabung.dat";
	$myfile = fopen($namaFile, "r")or die("Tidak bisa buka file!");
	while(!feof($myfile)) {
		$data=fgets($myfile);
		$ex=explode(",",$data);
		$a=$ex[0];$b=$ex[1];$c=$ex[2];
		echo "<tr><td>$a</td><td>$b</td><td>$c</td>";
		echo "<td><a href='viewLuasTabung.php?a=$a&b=$b&c=$c'>view</a></td>";
		echo "<tr>";
	}
	fclose($myfile);
?>
</table>
<?php 
 $jml =count(file($namaFile));
 echo"<p>";
 echo "Jumlah Data : $jml";

 ?>
</body>
</html>