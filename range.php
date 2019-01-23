<?php
// Range.php
if(isset($_POST["From"], $_POST["to"]))
{
	$conn = mysqli_connect("localhost", "root", "", "sensores_avicola");
	$result = '';
	$query = "SELECT * FROM informeamoniaco WHERE fecha BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
	$sql = mysqli_query($conn, $query);
	$result .='
	<table class="table table-bordered">
	<tr>
	<th>fecha</th>
	<th>13</th>
	<th>14</th>
	<th>15</th>
	<th>16</th>
	</tr>';
	if(mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			$result .='
			<tr>
			<td>'.$row["fecha"].'</td>
			<td>'.$row["13"].'</td>
			<td>'.$row["14"].'</td>
			<td>'.$row["15"].'</td>
			<td>'.$row["16"].'</td>
			</tr>';
		}
	}
	else
	{
		$result .='
		<tr>
		<td colspan="5">No Purchased Item Found</td>
		</tr>';
	}
	$result .='</table>';
	echo $result;
}
?>