<?php
 
$con = mysql_connect("localhost", "root", "") or die('Error en conexion a la DB');
mysql_select_db('formulario', $con) or die('Error al seleccionar la DB');
 
$interes1= $_POST['interes'];

 
$res = mysql_query("INSERT INTO interes (interes1) VALUES('$interes1)");
if(mysql_affected_rows()>0){
    echo "1";
}
else{
    echo "2";
}
 
 
?>