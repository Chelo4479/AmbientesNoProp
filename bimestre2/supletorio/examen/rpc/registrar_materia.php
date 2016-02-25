<?php

if($_POST)
{
    	$id_materia=empty($_POST['id_materia']) ? "" : $_POST['id_materia'] ;

    	$nivel=empty($_POST['nivel']) ? "" : $_POST['nivel'];
    	$estado=empty($_POST['estado']) ? "" : $_POST['estado'] ;

      $flag = "";
      $conn = new mysqli('localhost' , 'root' , '', 'supletorio');
      if($conn->connect_error)
      {
        $result = "No se puede establecer la conexión con la BDD";
      } 
      else
      {
        $query="SELECT * FROM materia where id_nivel ='$nivel'";
        $result = $conn->query($query);
        if(!$result) die($conn->error);
        $rows = $result->num_rows;
        $result->data_seek(0);
        $row=$result->fetch_array(MYSQLI_ASSOC);

        if($rows!=0){
            $flag = "true";
        }else{
            $flag = "false";
        }
      }
      if($flag=="true")
      {
          if($estado=="no")
            {
              $conn = new mysqli('localhost' , 'root' , '', 'supletorio');
              if( $conn->connect_error )
              {
                $result = "No se puede establecer la conexión con la BDD";
              }
              else
              {
                $query_borrar = "UPDATE materia  set id_nivel = '0' where id_materia ='$id_materia'";
                $res = $conn->query($query_borrar);
                if(!$res){
                  echo 'No se pudo eliminar.' . $conn->error;
                } else {
                  echo 'Registro Guardado.';
                }
              }
            }
         
      }
      else
      if($flag=="false")
      {
          if($estado=="si")
            {
              $conn = new mysqli('localhost' , 'root' , '', 'supletorio');
              if( $conn->connect_error )
              {
                echo "No se puede establecer la conexión con la BDD";
              }
              else
              {
                $query_insertar = "UPDATE materia  set id_nivel = '$nivel' where id_materia ='$id_materia'";
                $res = $conn->query($query_insertar);
                if(!$res){
                  echo 'Error al registrar.' . $conn->error;
                } else {
                  echo 'Materia registrada.';
                }
              }
            }          
      }   
} 

?> 
