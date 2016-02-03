<?php
$result="";
if($_POST){

$nombre=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$contrasena=md5($_POST['contrasena']);


$conn = new mysqli('localhost', 'root',"", "examen2");
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO estudiante(nombres,apellidos,email,contrasena)
                  VALUES ('$nombre','apellidos', '$email','$contrasena')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existio un error al insertar.' . $conn->error;
    } else {
      $result = 'Registro enviado con exito.';
      //header("Location: tabla.php");
    }
  }



  
}
echo json_encode( $result );
?>

