<?php
require("conexion.php");
$temperatura=$_GET['temperatura'];
$humedad=$_GET['humedad'];
$amoniaco=$_GET['amoniaco'];

if($temperatura>31 || $humedad>75 || $amoniaco>600 ){
$estado='1';
}
else{
$estado='0';
}

$querytemp="INSERT INTO temperatura(fecha,hora,valor,estado) values(CURRENT_DATE(),DATE_ADD(CURRENT_TIME(), INTERVAL 2 HOUR),$temperatura,$estado)";
$queryhume="INSERT INTO humedad(fecha,hora,valor,estado) values(CURRENT_DATE(),DATE_ADD(CURRENT_TIME(), INTERVAL 2 HOUR),$humedad,$estado)";
$queryamon="INSERT INTO amoniaco(fecha,hora,valor,estado) values(CURRENT_DATE(),DATE_ADD(CURRENT_TIME(), INTERVAL 2 HOUR),$amoniaco,$estado)";

mysql_query("SET NAMES utf8");

$resultadotem= mysql_query($querytemp,$conexion);
$resultadohume= mysql_query($queryhume,$conexion);
$resultadoamon= mysql_query($queryamon,$conexion);

if($resultadotem==true && $resultadohume==true && $resultadoamon==true){

echo "true" ;
}
else{
echo "false";
}

?>