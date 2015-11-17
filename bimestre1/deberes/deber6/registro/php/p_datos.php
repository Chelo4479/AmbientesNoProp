 <?php
function mostrar_datos(){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2= ($_POST['password2']);
  $sexo = $_POST['sexo'];
  $dia = $_POST['dia'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];

  if(isset($_POST['enviar']))
  {
  if(!$email=filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))
    die ("EL CORREO NO ES VALIDO ");
  }

  if ($password != $password2) die ("LAS CONTRASEÑAS NO SON IGUALES " );
  

  $con = mysql_connect("localhost", "root", "") or die ("Error de conexion");
  mysql_select_db("sistema",$con) or die ("No existe la base de datos");

  $sql = "SELECT * FROM usuarios WHERE email = '".$email."'";
    $ejecutar = mysql_query($sql, $con) OR DIE ("Fallo ".mysql_error());
    if(mysql_num_rows($ejecutar) > 0)
    {
      die ("El mail ".$email." ya existe" );
    }


mysql_query("INSERT INTO usuarios (nombre,apellido,email,password,password2,sexo,dia,mes,anio) values ('$nombre', '$apellido','$email','$password','$password2','$sexo','$dia','$mes','$anio')");
echo "<div align='center'> <FONT FACE='impact' SIZE=6 COLOR='red'>
 Registrado Correctamente</FONT></div><br>";
 echo'';
}
?>