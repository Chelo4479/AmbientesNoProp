<?php
$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM materia order by nombre";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$materias2 = array();
for ($j = 0 ; $j < $rows ; ++$j)
{
  $result ->data_seek($j);
  $materias2[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
// 

$result ->close();
$conn ->close();
?>