<?php
$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM nivel order by id_nivel";
$result50 = $conn ->query($query);
if (!$result50) die($conn ->error);

$rows12 = $result50 ->num_rows;
$nivel = array();
for ($j = 0 ; $j < $rows12 ; ++$j)
{
  $result50 ->data_seek($j);
  $nivel[] = $result50 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
// 

$result50 ->close();
$conn ->close();
?>