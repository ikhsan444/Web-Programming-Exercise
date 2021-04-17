<html>
<body>
<h1>DATA MAHASISWA</h1>
<table width="100%" border="1" >
<tr>
	<th>NO</th>
	<th>NIM</th>
	<th>Nama Mhs</th>
	<th>Tanggal lahir</th>
	<th>Tempat Lahir</th>
	<th>Usia (Thn)</th>
</tr>
<?php 
	$namaFile ="datamhs.dat";
	$myfile = fopen($namaFile, "r")or die("Tidak bisa buka file!");
	$x=1;
	$today=new DateTime("today");
	while(!feof($myfile)) {
		$data=fgets($myfile);
		$ex=explode("|",$data);
		$tgl=new DateTime ($ex[2]);
		$y =$today->diff($tgl)->y;
		echo "<tr>";
		echo "<td>	$x	</td>";
		echo "<td> $ex[0] </td>";
		echo "<td> $ex[1] </td>";
		echo "<td> $ex[2] </td>";
		echo "<td> $ex[3] </td>";
		echo "<td> $y tahun </td>";
		echo "<tr>";
		$x++;
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
