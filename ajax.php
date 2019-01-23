<?php
$connect = mysqli_connect("localhost", "root", "", "sensores_avicola");//Configurar los datos de conexion
$columns = array('fecha','13', '14', '15', '16');

$query = "SELECT * FROM informeAmoniaco WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'fecha BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (id LIKE "%'.$_POST["search"]["value"].'%" 
  OR cliente LIKE "%'.$_POST["search"]["value"].'%" 
  OR producto LIKE "%'.$_POST["search"]["value"].'%" 
  OR documento LIKE "%'.$_POST["search"]["value"].'%"
  OR precio LIKE "%'.$_POST["search"]["value"].'%")
 ';
}



$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $fecha=date("d/m/Y", strtotime($row["fecha"]));			
 $sub_array = array();
 $sub_array[] = $row["fecha"];
  $sub_array[] = $row["13"];
 $sub_array[] = $row["14"];
 $sub_array[] = $row["15"];
 $sub_array[] = $row["16"];
 
 
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM informeAmoniaco";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>