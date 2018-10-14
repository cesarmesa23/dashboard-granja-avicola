<?php
error_reporting(0);
//setting header to json
header('Content-Type: application/json');
require('conexion.php');



//query to get data from the table
$query ="select  TIME_FORMAT(hora,'%H') as hora, valor from temperatura";

//execute query
mysql_query("SET NAMES utf8");
$result = mysql_query($query,$conexion);

//loop through the returned data
$data = array();

 while ($filas = mysql_fetch_array($result)) {
				$data[] = $filas;
                	
				}
	

//now print the data
print json_encode($data);

?>
