<!DOCTYPE html>
<html>
<head>
	Headings
</head>
<body>
<?php
$baris = 5;
$kolom = 5;
echo "<table border='1'";
for ($i=0; $i < $kolom ; $i++) { 
	echo "<tr>";
	for ($j=1; $j <$baris; $j++) { 
	echo "<td>",$j +($i*4),"</td>";
}
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
