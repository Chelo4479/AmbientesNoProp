
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
    <h1 id="h1">Registrate para poder Matricularte</h1>
    <div id="success" class="success"></div>
    <div id="error" class="error"></div>
    <div id="reg"> 

      <hr size="20" style="color: #0056b2;"/>
      
    </br>

      <form class="form-horizontal"  id="usuario">

        <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Nombres:</label>
    <div class="col-sm-3">
      <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombres">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Apellidos:</label>
    <div class="col-sm-3">
      <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Email:</label>
    <div class="col-sm-3">
      <input type="text" name="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Contraseña:</label>
    <div class="col-sm-3">
      <input type="text" name="contrasena" class="form-control" id="contrasena" placeholder="Contraseña">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Verificar Contraseña:</label>
    <div class="col-sm-3">
      <input type="text" name="vcontrasena" class="form-control" id="vcontrasena" placeholder="Verificar Contraseña">
    </div>
  </div>
  <br>

  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-11">
      <button type="button" class="btn btn-primary" id="btn-enviar">Registrame</button>
      <button type="button" class="btn btn-warning">Cancelar</button>
    </div>
  </div>
</form>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

