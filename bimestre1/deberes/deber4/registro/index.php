 <html>
   <head>
     <title>Pagina</title>
     <meta charset="utf-8">'
      <link rel="stylesheet" type="text/css" href="css/tareacs.css">
   </head>
   <body>
   	<br/> 

     <h1>Pagina</h1>
     <A HREF="registro.php"  >Regresar Pagina de Registro</A>

    <br/> 

    <?php

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

?>

    
<table  id="A1">
  <tr >
  <td  id="celda2" ><strong >Pagina de Prueba</strong></td>
  <td><p id="ref" align="center"><A HREF="registro.php" target="_blank"><font color=red>Registrarme</font></A></p></td>
  <td  id="celda2"><input name="nombre" type="text" id="nombre" value="Email"></td>
  <td  id="celda2"><input name="nombre" type="text" id="nombre" value="Contraseña"></td>
  <td  id="celda2"><input id="btn" type="submit" value="Ingresar" /></td>

</tr> 

</table>


<table id="table5" >

<tr>
 
 <td  id="celda23">
  <strong >Lorem ipsum dolor sit amet, consectetur adipiscing elit. </strong>
  <p id="p2" > Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br/>euismod tincidunt ut laoreet dolore magna aliquam erat volutpat aliquam erat volutpat.<br/>ed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim <br/>
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Ut enim ad minim<br/>
  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in Ut enim ad minim<br/>
  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Ut enim ad minim</p>
<input id="btnp" type="submit" value="Learn More" />

  </table >
   <table id="tablaq">
<tr>
 <td id="celda24"><strong> Cabecera</strong></td>
 <td  id="celda25"><strong> Cabecera</strong></td>
 <td  id="celda26"><strong>Cabecera </strong></td>
 
</tr>

<tr id="tr2">

  <td>Web design encompassesisciplines in the<br/>
      many different skills production  <br/>
      and disciplines in the production <br/>
      of websites.<A HREF="http://www.htmlpoint.com"><input id="btn3"  type="submit"  Value="View Details" > </A></td> 
  <td>Web design encompassesisciplines in the<br/>
      many different skills production  <br/>
      and disciplines in the production <br/>
      of websites.<A HREF="http://www.htmlpoint.com" style="color:#58ACFA"><input id="btn3"  type="submit"  Value="View Details" > </A></td> </td> 
  <td>Web design encompassesisciplines in the <br/>
      many different skills production  <br/>
      and disciplines in the production  <br/>
      of websites.<A HREF="http://www.htmlpoint.com"><input id="btn3"  type="submit"  Value="View Details" ></A></td> 

 
 </tr>

</table>




   </body>
 </html>