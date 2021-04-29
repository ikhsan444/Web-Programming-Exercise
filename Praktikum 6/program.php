<?php
	if (!isset($_COOKIE['angka'])){
		setcookie("kunci", rand(10,20);
		}
		else if($_POST['tebakan'] == $_COOKIE['angka']){
			echo "Selamat ya... Anda benar, saya telah memilih bilangan ".$_COOKIE['kunci']."<br>";
			echo "<a href='game.html'>Ulangi permainan</a>";
		} elseif ($_POST['tebakan'] > $_COOKIE['angka']){
			include('game.html');
			echo "Waaah... masih salah ya, bilangan tebakan Anda terlalu tinggi";
		} elseif ($_POST['tebakan'] < $_COOKIE['angka']){
			include('game.html');
			echo "Waaah... masih salah ya, bilangan tebakan Anda terlalu rendah";
		} else {
			include('game.html');
		}
	} else {
		include('game.html');
	}
?>