<!DOCTYPE html> 
<html lang="es"> 
<head> 
  <meta charset="utf-8">
	<title>Tabla</title>

	  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<p class="big">
DATOS ALMACENADOS <br>

</p>

	<center>
		<table border="2">
		<tr>
		<td>Buscar</td>
		<td><input type="text" name="txtbus"/></td>
		<td><input type="submit" name="btn1"  value="Buscar"  /></td>
		</tr>
		</table>

		<table id="tablaf" border="1">

			<thead>
				<tr>
				<th colspan="1"><a href="index.php">Nuevo Usuario</a></th>
				<th id="lista"colspan="12">Lista de Usuarios</th>
				</tr>
				<tr>



			</thead>
			<br>
			<tbody>

				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Email</td>
					<td>Telefono</td>
					<td>Direccion</td>
					<td>Provincia</td>
					<td>Canton</td>
					<td>Parroquia</td>
					<td>Usuario</td>
					<td>Contraseña</td>
					<td>Verf.Contraseña</td>
					<td colspan="2">Operaciones</td>
					
				</tr>

				<?php

				$conexion = new mysqli('localhost','root','','bddregistro');

				$query = "SELECT * FROM usuarios";
				$resultado = $conexion->query($query);
				while ($row=$resultado->fetch_assoc()) 
				{
					?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['telefono']; ?></td>
					<td><?php echo $row['direccion']; ?></td>
					<td><?php echo $row['provincia']; ?></td>
					<td><?php echo $row['canton']; ?></td>
					<td><?php echo $row['parroquia']; ?></td>
					<td><?php echo $row['usuario']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['vpassword']; ?></td>
					<td><a href="rpc/modificar.php?id=<?php echo $row['id'];?>">Modificar</a></td>
					<td><a href="rpc/eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
				
				</tr>

				<?php	
				}
				?>

			</tbody>
		</table>
	</center>


</body>
</html>