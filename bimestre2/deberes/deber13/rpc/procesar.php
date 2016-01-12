<?php
$result = "";
// print_r($_POST);
if ( $_POST ) {
  $name = htmlentities($_POST['nombre']);
  $email = htmlentities($_POST['email']);
  $telefono = htmlentities($_POST['telefono']);
  $direccion = htmlentities($_POST['direccion']);
  $usuario = htmlentities($_POST['usuario']);
  $password = htmlentities($_POST['password']);
  $vpassword = htmlentities($_POST['vpassword']);
  
  $conn = new mysqli('localhost', 'root','', 'registro');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO datos(nombre,email,telefono,direccion,usuario,password,vpassword)
                  VALUES ('$name', '$email','$telefono', '$direccion','$usuario', '$password', '$vpassword')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existio un error al insertar.' . $conn->error;
    } else {
      $result = 'Registro enviado con exito.';
    }
  }

  
}
echo json_encode( $result );
?>

