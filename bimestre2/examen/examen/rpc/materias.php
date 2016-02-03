<?php
$conn = new mysqli('localhost' , 'root' , '', 'examen2');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM nivel";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$nivel = array();
for ($j = 0 ; $j < $rows ; ++$j)
{
  $result ->data_seek($j);
  $nivel[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
// 
$query2 = "SELECT * FROM materia";
$result2 = $conn ->query($query2);

if (!$result2) die($conn ->error);
$rows2 = $result2 ->num_rows;
$usuarios=array();
for ($j = 0 ; $j < $rows2 ; ++$j){
  $result2 ->data_seek($j);
  $materias[] = $result2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}


$result ->close();
$conn ->close();
?>
