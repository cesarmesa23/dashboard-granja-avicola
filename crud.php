<?php
	//error_reporting(0);
	session_name("granjaAvicola");
	SESSION_START();

	$idSesion=session_id();
	

	//echo $idSesion;

	
	function validarUser($user, $password){
		require('conexion.php');
		include('alertas.php');

		$_SESSION['ingresouser']='';
		$_SESSION['userapp']='';
		$consulta="select nombre,apellido,usuario,contrasena,estado from administrador where usuario='$user'";
		mysql_query("SET NAMES utf8");
		$resultado=mysql_query($consulta,$conexion);
		$datos=mysql_fetch_array($resultado);

		$user2=$datos['usuario'];
		$password2=$datos['contrasena'];
		$estadoUser=$datos['estado'];

        if ($user2==$user && $password2==$password) {
        	if ($estadoUser==1) {
	        	$_SESSION['ingresouser']='YES';             
	        	$_SESSION['userapp']=$datos['usuario'];
				$_SESSION['nomuser']=$datos['nombre']." ".$datos['apellido'];
				header("Location: index.php");
        	}else{
        		alertaLoginDesac("El usuario se encuentra desactivado.");
        	}

		}else{
			alertaLogin();
		}

	}
	
		function faltanDatos($msj){
		include('alertas.php');

		alertaError($msj);
	}

	
	function cerrarSesionAdmin(){
		
		session_destroy();
		header("Location: login.php");
	}


?>

