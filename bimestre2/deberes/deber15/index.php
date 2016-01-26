<?php

$conn = new mysqli('localhost' , 'root' , '', 'registro');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM provincias";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$provincias = array();
for ($j = 0 ; $j < $rows ; ++$j)
{
  $result ->data_seek($j);
  $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
// print_r($provincias);

$query = "SELECT * FROM datos";
$result = $conn ->query($query);

$datos;

$result ->close();
$conn ->close();
?>


<!DOCTYPE html> 
<html lang="es"> 
<head> 
  <meta charset="utf-8"> 
  <title>Formulario de Registro</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
  
  <div class="container">
  </br>
    <h1 id="h1">Ingrese al Formulario</h1>
    <div id="success" class="success"></div>
    <div id="error" class="error"></div>
    <div id="reg"> 
    </br>

    <!-- Button trigger modal -->
    <button  type="button"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contact-form">
      Registrarse
    </button>
  </div>

    <!-- Modal -->
    <div class="modal fade" id="contact-form" tabindex="-1" role="dialog" aria-labelledby="ContactLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 id="h4" class="modal-title" id="ContactLabel">Formulario de Registro</h4>
          </div>
          <div class="modal-body">
            <form id="contacto">
              <div class="form-group">
              <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>

              <div class="form-group">
              <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
              </div>

              <div class="form-group">
              <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección">
              </div>

              <div class="form-group">
              <label for="provincia">Provincia</label>
              <select class="form-control" id="txtprovincia" name="txtprovincia">
                <option value="">Seleccione...</option>
                  <?php
                  foreach($provincias as $pr){
                    echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
                  }

                ?>
                
              </select> 
                
              
              </div>

              <div class="form-group">
              <label for="canton">Cantón</label>
                <select select class="form-control" id="txtcanton" name="canton">
                  <option value="">Seleccione...</option>
                </select>
              </div>


              <div class="form-group">
              <label for="parroquia">Parroquia</label>
                <select select class="form-control"  id="txtparroquia" name="parroquia">
                  <option value="">Seleccione...</option>
                </select>
              </div>

              <div class="form-group">
              <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
              </div>

              <div class="form-group">
              <label for="password">Contraseña</label>
                <input type="text" name="password" class="form-control" id="password" placeholder="Contraseña">
              </div>

              <div class="form-group">
              <label for="vpassword">Verificar Contraseña</label>
                <input type="text" name="vpassword" class="form-control" id="vpassword" placeholder="Verificar Contraseña">
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="btn-enviar" data-loading-text="Enviando...">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</div>


<?php include("tabla.php"); ?>





<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

