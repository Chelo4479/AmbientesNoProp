<?php 
	
	$conexion = new mysqli('localhost','root','','bddregistro');
	
	$id =$_REQUEST['id'];
	
	
	$query="DELETE FROM usuarios WHERE id ='$id'";
	
	$resultado=$conexion->query($query);

	if ($resultado) {

		echo " Eliminado";
	

		
	}
	else{
		echo "Fallo al Eliminar";
	}

?>