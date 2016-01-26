<!DOCTYPE html> 
<html> 
<head> 
  <title>MODIFICAR</title> 
  </head> 
  <body> 
    <center> 

<?php

        $id = $_REQUEST['id'];



        $conexion = new mysqli('localhost','root','','bddregistro');

        $query = "SELECT * FROM usuarios WHERE id='$id'";
        $resultado = $conexion->query($query);
        $row=$resultado->fetch_assoc();
        
          ?>

      <form action= "modificar_proceso.php?id=<?php echo $row['id']; ?>" method="post"> 

        


       <br><br><br>
       <label for="nombre">Nombre:</label>
       <input type="text" REQUIRED name="nombre" placeholder="nombre" value ="<?php echo $row['nombre']; ?>"><br><br>
       <label for="nombre">Email:</label>
       <input type="text" REQUIRED name="email" placeholder="email" value ="<?php echo $row['email']; ?>"><br><br>
       <label for="nombre">Telefono:</label>
       <input type="text" REQUIRED name="telefono" placeholder="nombre" value ="<?php echo $row['telefono']; ?>"><br><br>
       <label for="nombre">Direccion:</label>
       <input type="text" REQUIRED name="direccion" placeholder="nombre" value ="<?php echo $row['direccion']; ?>"><br><br>
       <label for="nombre">Provincia:</label>
       <input type="text" REQUIRED name="provincia" placeholder="nombre" value ="<?php echo $row['provincia']; ?>"><br><br>
       <label for="nombre">Canton:</label>
       <input type="text" REQUIRED name="canton" placeholder="nombre" value ="<?php echo $row['canton']; ?>"><br><br>
       <label for="nombre">Parroquia:</label>
       <input type="text" REQUIRED name="parroquia" placeholder="nombre" value ="<?php echo $row['parroquia']; ?>"><br><br>
       <label for="nombre">Usuario:</label>
       <input type="text" REQUIRED name="usuario" placeholder="nombre" value ="<?php echo $row['usuario']; ?>"><br><br>
       <label for="nombre">Contraseña:</label>
       <input type="text" REQUIRED name="password" placeholder="nombre" value ="<?php echo $row['password']; ?>"><br><br>
       <label for="nombre">Ver.Contraseña:</label>
       <input type="text" REQUIRED name="vpassword" placeholder="nombre" value ="<?php echo $row['vpassword']; ?>"><br><br>
       
       <input type="submit" value="Cambiar">
  </form> 
</center>      
</body> 
</html> 
