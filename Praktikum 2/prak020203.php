<!DOCTYPE html>
<html>
<head>
	For loop
</head>
<body>
<?php
$baris = 5;
$kolom = 5;
echo "<table border='1'";
for ($i=0; $i < $kolom ; $i++) { 
	echo "<tr>";
	for ($j=1; $j <$baris; $j++) { 
		$a = $j +($i*4);
		if ($a%2==0) {
			echo "<td bgcolor='red'><font color='white'>",$a,"</td>";
		}else{
			echo "<td bgcolor='white'><font color='red'>",$a,"</td>";
		}

	
}
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>