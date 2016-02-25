<?php

$nivel1='#nivel';
$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
if($conn->connect_error)
{
    $result30 = "No se puede establecer la conexión con la BDD";
} 
else
{
    $materia = "SELECT * FROM materia WHERE id_nivel = '2'";
    $resp = $conn -> query($materia);
    $row = $resp -> num_rows;
    $resp -> data_seek (0);
    $row = $resp -> fetch_array ( MYSQLI_ASSOC );
    $id_materia2= $row['id_materia'];


	$query2 = "SELECT * FROM materia WHERE id_materia='2'";
	$result22 = $conn ->query($query2);
	if (!$result22) die($conn ->error);

	$rows22 = $result22 ->num_rows;
}

function materia($id_materia)
{
	$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
    if ($conn->connect_error) die($conn ->connect_error);

	$query2 = "SELECT nombre FROM materia WHERE id_materia='$id_materia'";
	$result2 = $conn ->query($query2);
	if (!$result2) die($conn ->error);

	$rows2 = $result2 ->num_rows;
	$result2->data_seek(1);
    $row2=$result2->fetch_array(MYSQLI_ASSOC);
    return $row2['nombre'];
}

