<?php  
    session_start();
    if ($_POST["hasil"] != $_SESSION["hasil"]) {
        $_SESSION["score"] = $_SESSION["score"] - 2 ;
        $_SESSION["lives"] = $_SESSION["lives"] - 1 ;
        header('Location: jwbsalah.php');
    } else {
        $_SESSION["score"] = $_SESSION["score"] + 10 ;
        header('Location: jwbbenar.php');
	}
?>