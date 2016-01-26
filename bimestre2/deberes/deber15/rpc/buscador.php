<?
$nombre = htmlentities($_POST['nombre']);
$conexion = new mysqli('localhost','root','','bddregistro');
$query="SELECT * FROM usuarios WHERE nombre ='$nombre'";


echo "<tr><td>nombre</td> <td>email</td> <td>telefono</td></tr>";

while ($row=mysql_fetch_array($query)) 
{
	echo "<tr><td>%s</td> <td>%s</td> <td>%s</td></tr>",$row[$nombre],$row[$email],$row[$telefono];
}

mysql_free_result($query);
mysql_close();
?>