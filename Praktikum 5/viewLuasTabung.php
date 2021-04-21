<?php
$n =$_GET['a'];
$d = $_GET['b'];
$t =$_GET['c'];
$r = $d/2;
$phi = 3.14;
$luas = (2 * $phi *$r * $t) + (2* $phi* $r * $r);
echo "Luas tabung $n  dengan Diameter $d dan Tinggi $t  adalah $luas satuan luas ";
?>
