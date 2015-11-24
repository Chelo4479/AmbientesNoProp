<?php
if ($_POST) {
  $provincias = $_POST['provincias'];
  $cantones = $_POST['cantones'];
  $parroquias = $_POST['parroquias'];
  

  $con = mysql_connect("localhost", "root", "") or die ("Error de conexion");
  mysql_select_db("s5e3",$con) or die ("No existe la base de datos");


  mysql_query("INSERT INTO datos (provincias,cantones,parroquias) 
  values ('$provincias', '$cantones','$parroquias')");
  }

?>