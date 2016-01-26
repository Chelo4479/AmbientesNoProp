<html>
<head>
  <title></title>
</head>
<body>

  <?php 

$conexion = new mysqli('localhost','root','','bddregistro');
  
  $id=$_REQUEST['id'];
  $name=$_POST['nombre'];
  $email=$_POST['email'];
  $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $provincia=$_POST['provincia'];
    $canton=$_POST['canton'];
    $parroquia=$_POST['parroquia'];
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $vpassword=$_POST['vpassword'];
  
  $query = "UPDATE usuarios 
  SET nombre='$name', 
  email='$email', 
   telefono='$telefono', 
   direccion='$direccion',
   provincia='$provincia', 
   canton='$canton',
    parroquia='$parroquia', 
   usuario='$usuario', 
   password='$password', 
   vpassword='$vpassword' 
       WHERE id ='$id'";
  
  $resultado=$conexion->query($query);



  if ($resultado) {

    echo "Modificado";
    //header("location: tabla.php");



  }
  else{
    echo "Fallo al guardar";
  }



?>

<a href="index.php">Regresar</a>


</body>
</html>


