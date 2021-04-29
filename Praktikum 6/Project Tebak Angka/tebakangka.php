<?php
    session_start();           
     	if(!isset($_POST['kirim'])){
     		$_POST['angka']=rand(0,100);
     	}else if($_POST['tebakan']==$_POST['angka']){
            echo "Selamat ya… Anda benar, saya telah memilih bilangan ".$_POST['tebakan'];
            echo "<a href='program.php'>Ulangi lagi</a>";
        }else if($_POST['tebakan']<$_POST['angka']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.";
        }else if($_POST['tebakan']>$_POST['angka']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
        }
    session_destroy();
 ?>
<html>
<head>
    <title>GAME TEBAK ANGKA</title>
</head>
<body>
    <p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
    <form method="POST">
        <input type="number" name="tebakan">
        <input type="hidden" name="angka" value="<?php echo $_POST['angka'];?>">
        <input type="submit" name="kirim" value="Submit">
    </form>
</body>
</html>