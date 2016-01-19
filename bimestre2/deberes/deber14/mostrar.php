<html> 
<body> 
  
<?php 

$link = mysql_connect("localhost",  'root',''); 

mysql_select_db("registro", $link); 

$result = mysql_query("SELECT nombre, email, telefono, direccion, provincia, canton, parroquia, usuario, password, vpassword FROM datos", $link); 

if ($row = mysql_fetch_array($result))
{ 
   
   echo "<table id= 'tabled' border = '1' align='center' > \n"; 
   
   echo "<tr><td>Nombre</td><td>E-Mail</td><td>Telefono</td><td>Direccion</td><td>Provincia</td><td>Canton</td><td>Parroquia</td><td>Usuario</td><td>Contraseña</td><td>Verificar Password</td></tr> \n"; 
   do 
   { 
      
      echo "<tr><td>".$row["nombre"]."</td><td>".$row["email"]."</td><td>".$row["telefono"]."</td><td>".$row["direccion"]."</td><td>".$row["provincia"]."</td><td>".$row["canton"]."</td><td>".$row["parroquia"]."</td><td>".$row["usuario"]."</td><td>".$row["password"]."</td><td>".$row["vpassword"]."</td></tr> \n"; 
   } 
   while ($row = mysql_fetch_array($result)); 
   
   echo "</table> \n"; 
} 
else 
{ 

echo "¡ No se ha encontrado ningún registro !"; 

} 

?> 
  
</body> 
</html>