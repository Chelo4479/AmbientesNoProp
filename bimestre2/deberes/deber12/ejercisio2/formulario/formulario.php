<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
  <form id="form">
  <table border="3">
    <tr id="contenedor_1" class="contenedor">
      <td >
        <div >
        <label for="intereses">Interés 1:</label>
       
      </div>
      </td>

       <td >
        <div >
        
        <input type="text" id="interes1" name="interes1" value="" class="con">
      </div>
      </td>
    </tr>

    <tr>
      <td  colspan="2">
        <button id="btn">Agregar</button>
      </td>
    </tr>
    </br>
    <tr>
      <td colspan="2">
        <button id="btn_eliminar">Eliminar Interés</button>
      </td>
    </tr>

    <tr>
      <td  colspan="2">
         <input id="submit" type="submit" value="Guardar Intereses" />
      </td>
    </tr>
</form>
  </table>

  <span id="res"></span>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/main.js"></script>
 
</body>
</html>