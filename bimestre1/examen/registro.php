<html>
<head>
  <title>Examen</title>
  <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

      <form action="index.php" method="post">
<body>


<table  id="A1" >
  <tr >
  <td  id="celda1"><strong >Registro Usuario</strong></td>
</tr>
<tr >
  <td><label for="email">Email: </label></td>
  <td  id="celda2"><input name="email" type="text" id="email" value=""></td>
  </tr>
  <tr >
    <td><label for="password">Contraseña: </label></td>
  <td  id="celda2"><input name="password" type="text" id="password" value=""></td>
 </tr>
 <tr >
    <td><label for="password2">Verificar Contraseña: </label></td>
  <td  id="celda2"><input name="password2" type="text" id="password2" value=""></td>
 </tr>
<tr>
  <td ><input id="btn" type="submit" value="Registrarme" /></td>
</tr>
</table>

<?php
if ($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
 
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

mysql_query("INSERT INTO registrou (email,password,password2) values ('$email', '$password','$password2')");

}
?>




</body>
</html>