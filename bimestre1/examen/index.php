<html>
<head>
	<title>Examen</title>
	<meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<table  id="A1">
  <tr >
  <td  id="celda1"><strong >Inicio de Sesion</strong></td>
</tr>
<tr >
  <td><label for="nombre1">Email: </label></td>
  <td  id="celda2"><input name="email" type="text" id="email" value=""></td>
  </tr>
  <tr >
  	<td><label for="password1">Contraseña: </label></td>
  <td  id="celda2"><input name="password1" type="text" id="password1" value=""></td>
 </tr>
<tr>
  <td><input id="btn" type="submit" value="Iniciar Sesion" /></br></br><A id ="ref" HREF="registro.php">Registrarme </A></td>
   </tr>
</table>

<?php
if ($_POST) {
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $edad = $_POST['edad'];
  $peso = $_POST['peso'];
  $genero = $_POST['genero'];
/*  $email2 = $_POST['email2'];
  $password2 = $_POST['password2'];
  $password2c= ($_POST['password2c']);


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
*/

  $con = mysql_connect("localhost", "root", "") or die ("Error de conexion");
  mysql_select_db("bdd",$con) or die ("No existe la base de datos");
/*
  $sql = "SELECT * FROM usuarios WHERE email = '".$email."'";
    $ejecutar = mysql_query($sql, $con) OR DIE ("Fallo ".mysql_error());
    if(mysql_num_rows($ejecutar) > 0)
    {
      die ("El mail ".$email." ya existe" );
    }
*/

mysql_query("INSERT INTO registroc (nombre,apellidos,edad,peso,genero) values ('$nombre', '$apellidos','$edad','$peso','$genero')");




}
?>





</body>
</html>