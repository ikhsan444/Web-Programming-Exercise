<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	Heading
</head>
<body>
	<?php
	for ($i=0; $i < 7 ; $i++) { 
		if ($i%2==0) {
			echo "<font color='red'><h".$i.">Heading".$i."</h".$i."></font>";
		}else{
			echo "<h".$i.">Heading".$i."</h".$i.">";
		}

	}?>

</body>
</html>