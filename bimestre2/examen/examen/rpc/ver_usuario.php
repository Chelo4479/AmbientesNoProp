 <?php
//function mostrar_datos(){

  
$result = "";
if($_POST) {
    $email = htmlentities($_POST['email']);

    
  $con = mysql_connect("localhost", "root", "") or die ("Error de conexion");
  mysql_select_db("examen2",$con) or die ("No existe la base de datos");

  $sql = "SELECT * FROM estudiante WHERE email = '".$email."'";
    $ejecutar = mysql_query($sql, $con) OR DIE ("Fallo ".mysql_error());
    if(mysql_num_rows($ejecutar) > 0)
    {
      die ("El mail ".$email." ya existe" );
    }
    echo json_encode( $result );
}


//}
?>