<?php

$result="";

if($_POST)

{

$email=$_POST['email'];


$conn = new mysqli('localhost', 'root',"", "examen2");

  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";

  else
  {

    $verificar = "SELECT * FROM estudiante WHERE email='$email')";
    $res = $conn->query($verificar);

        $rows = $res ->num_rows;
    if($rows>0)
    {
       echo "false";
    }
    else
    {
        echo "true";
    }
}

}
?>