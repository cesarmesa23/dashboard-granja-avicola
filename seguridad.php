<?php
	error_reporting(0);
	session_name("granjaAvicola");
	SESSION_START();
	$usu=$_SESSION['ingresouser'];
	//echo "usuario: $usu";


	if($usu != "YES" || $usu == ""){
	   header("Location: login.php");
	}
?>
