<?php 
include ('rpc/niveles.php');
include ('rpc/get_materias.php');
include ('rpc/datos_matricula.php');
?>
<?php  ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Pagina de Registro</title>

   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

  </head>
  <body>
    
    <div class="container">
      <div>
        <h1 id="h1"> Registro de materias</h1>
      </div>

    <hr/>

    <div id="success" class="success"></div>
    <div id="error" class="error"></div>

      <div id="form-registro">

      <form action="" method="post" class="form-horizontal"  id="registro">


     <div id="tablaMaterias" class=" col-sm-10">

         <div id="nivelselect" class=" col-sm-6 form-group">
            <label id="Nivel" for="inputEmail3" class=" col-sm-6 control-label">Seleccione el Nivel:</label>
               <div class="col-sm-offset-0 col-sm-6">
                  <select class="  form-control" id="nivel" name="nivel">
                      <option value="">Seleccione...</option>
                        <?php
                          foreach($nivel as $ni){
                            echo '<option value="' . $ni['id_nivel'] . '">' . $ni['nombre'] . '</option>';
                        }

                      ?>  
                   </select> 
              </div>

        <div class="panel-body">
          <div id="titulo">Materias Seleccionadas</div>
          <div  charset="UTF-8" id="materiaSeleccionada" name="materia">

            <table id="trt" class="table table-hover" id="tabla-usuarios" >
            <thead>
              <tr id="trt" class="info" >
                <th id="tht">Materia</th>
                </tr>

                <tbody>
                  <?php
                      for($i=0;$i<$rows22;++$i)
                      {
                        $result22->data_seek($j);
                        $row22=$result22->fetch_array(MYSQLI_ASSOC);
                        echo '<tr>';
                          echo '<td id="materia';echo $j; echo '" class="materia">'; echo htmlentities(materia($row22['id_materia'])); echo '</td>';
                        echo '</tr>';
                      }
                    ?> 
                 </tbody>

            </thead>
          </table>

          </div>
        </div>
        <div class="panel-body">
          <div id="titulo">Lista de todas las materias</div>
          <div  charset="UTF-8" id="materia" name="materia">
            <?php
              foreach($materias2 as $mat)
              {
                echo'<input type="checkbox" name="materias[]" value="'.$mat["id_materia"].'"> '.$mat["nombre"].'<br>';
              }
            ?> 
          </div>
        </div>
        </div>
      </div>

      

       <div class="form-group">
          <div class="col-sm-offset-5 col-sm-3">
            <button type="button" class="btn btn-primary btn-lg btn-block" id="btn-guardar">Registrame&nbsp;&nbsp;<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
            </button>
          </div>
        </div>

        <br>

        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-3">
            <button type="button" class="btn btn-warning btn-lg btn-block" id="btn-cancelar">Cancelar&nbsp;&nbsp;<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
            </button>
          </div>
        </div>

                
      </form>

  </div>
        



   







    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/additional-methods.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>