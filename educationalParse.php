<?php
	session_start();
	$_SESSION['eUID']=$_POST["uid"];
	$_SESSION['courseAd']=$_POST["courseAd"];
	$_SESSION['major']=$_POST["major"];
	$_SESSION['hlscB']=$_POST["hslcB"];
	$_SESSION['hlscI']=$_POST["hslcI"];
	$_SESSION['hlscY']=$_POST["hslcY"];
	$_SESSION['hlscP']=$_POST["hslcP"];
	$_SESSION['hsS']=$_POST["hsS"];
	$_SESSION['hsB']=$_POST["hsB"];
	$_SESSION['hsI']=$_POST["hsI"];
	$_SESSION['hsY']=$_POST["hsY"];
	$_SESSION['hsP']=$_POST["hsP"];
	$_SESSION['gD']=$_POST["gD"];
	$_SESSION['gM']=$_POST["gM"];
	$_SESSION['gU']=$_POST["gU"];
	$_SESSION['gI']=$_POST["gI"];
	$_SESSION['gY']=$_POST["gY"];
	$_SESSION['gP']=$_POST["gP"];
	echo '<script>alert("Records saved correctly..Click Ok to continue form fillup")</script>';
	echo '<script>location.href="uploadFiles.php"</script>';