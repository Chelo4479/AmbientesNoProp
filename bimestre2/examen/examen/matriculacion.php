
<?php
include('rpc/materias.php');
include('rpc/p_index.php');
?>


<!DOCTYPE html> 
<html lang="es"> 
<head> 
  <meta charset="utf-8"> 
  <title>Matriculación</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
  
  <div class="container">
  </br>
    <h1 id="h1">Bienvenido</h1>
    <div id="success" class="success"></div>
    <div id="error" class="error"></div>
    <div id="reg"> 

      <hr size="20" style="color: #0056b2;"/>

    </br>

<form class="form-horizontal" id="matriculacion">

  <table>

    <tr>
      <th>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-7 control-label">Seleccione el Nivel:</label>
               <div class="col-sm-offset-7 col-sm-7">
                  <select class="form-control" id="nivel" name="nivel">
                      <option value="">Seleccione...</option>
                        <?php
                          foreach($nivel as $ni){
                            echo '<option value="' . $ni['id_nivel'] . '">' . $ni['nombre'] . '</option>';
                        }

                      ?>  
                   </select> 
              </div>
          </div>

      </th>

      <th>
      <div class="form-group">
         <div class="col-sm-offset-5 col-sm-10">
            <div class="panel panel-primary">
               <div class="panel-heading">
                   <h3 class="panel-title">Materias</h3>
                      </div>

                        <div class="panel-body">

                          <div class="radio">
                            <label>
                              <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
                          Esta es una opción muy interesante que tienes que pinchar
                             </label>
                      </div>

                    </div>
              </div>
          </div>
      </div>

   </th>
</tr>
</table>





  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
      <button type="button" class="btn btn-primary">Registrar Materias</button>
    </div>
  </div>

<div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
      <div class="page-header">
        <h1>Lista de Materias en las Que se Encuentra Registrado: </h1>
      </div>
    </div>
</div>


<div class="registros" id="agrega-registros"></div>
<br>
<table class="table table-hover" id="tabla-usuarios" >
  <thead>
    <tr class="info" >
      <th>Id</th>
        <th>Materia</th>
        <th>Nivel</th>
        <th >Profesor</th>
      </tr>

      <tbody>
       
    <?php

    include('rpc/tabla.php');

          while ($row=$resultado->fetch_assoc()) 
        {
          ?>

          <tr>
          <td class="danger"><?php echo htmlentities($row['id_nivel']); ?></td>
          <td ><?php echo htmlentities($row['nombre']); ?></td>
          <td><?php echo $row['id_nivel']; ?></td>
          <td><?php echo htmlentities($row['profesor']); ?></td>
          
        
        </tr>

        <?php 
        }
        ?>

        
   
    </tbody>

  </thead>
</table>


</form>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

