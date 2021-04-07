<?php
	function hitungDenda($tgl1,$tgl2){
		$exp1=explode("-",$tgl1);
		$date1=$exp1[2];
		$month1=$exp1[1];
		$year1=$exp1[0];

		$exp2=explode("-",$tgl2);
		$date2=$exp2[2];
		$month2=$exp2[1];
		$year2=$exp1[0];

		$jd1=GregorianToJD($month1, $date1,$year1 );
		$jd2=GregorianToJD($month2, $date2,$year2 );

		$selisih=$jd2-$jd1;
		$denda=$selisih*3000;
		echo "Besaran denda adalah :Rp.".$denda;
	}
	hitungDenda("2021-01-03","2021-01-05");
?>
