<?php
error_reporting(0);
require('conexion.php');



//query to get data from the table
$query ="update amoniaco set estado='0' where fecha=curdate()  and estado='1'";
$query1 ="update temperatura set estado='0' where fecha=curdate()  and estado='1'";
$query2 ="update humedad set estado='0' where fecha=curdate()  and estado='1'";

//execute query
mysql_query("SET NAMES utf8");
$result = mysql_query($query,$conexion);
$result1 = mysql_query($query1,$conexion);
$result2 = mysql_query($query2,$conexion);

echo'
	<script type="text/javascript">
		  window.location="index.php";
	</script>';

?>
