
 <html>
<head>
	<title>Examen</title>
	<meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<form action="index.php" method="post">
<body>

<table  id="A1" >
  <tr >
  <td  id="celda1"><strong >Registro de Clientes</strong></td>
</tr>
<tr >
  <td><label for="nombre">Nombre: </label></td>
  <td  id="celda2"><input name="nombre" type="text" id="nombre" value=""></td>
</tr>

  	<td><label for="apellidos">Apellidos: </label></td>
  <td  id="celda2"><input name="apellidos" type="text" id="apellidos" value=""></td>
</tr>

<tr>
<th>
<label for="edad">Edad: </label>
</th>
  <th>
  <select name="edad" id="edad">
  <option selected>- Seleccione:</option>
  <option  value="menos de  20">Menos de 20 Años</option>
  <option value="Entre 20 y 39 Años">Entre 20 y 39 Años</option>
  <option value="Entre 40 y 59 Años">Entre 40 y 59 Años</option>
  <option value="Mas de 60 Años">Mas de 60 Años</option>
  </select>
  </th>


  <td><input type="radio" name="otro" value="otro" >OTRO</td>
</tr>

 <tr >
    <td><label for="peso">Peso: </label></td>
  <td  id="celda2"><input name="peso" type="text" id="peso" value=""></td>
 </tr>

<tr>
  <td><label for="genero">Genero: </label></td>
  <td><input type="radio" name="genero" value="hombre" >Hombre</td>
  <td> <input type="radio" name="genero" value="mujer">Mujer</td>
</tr>

<tr colsplan="2">
  <td><input id="btn" type="submit" value="Registrar" /> <?php include ("config.php");?></br></br><A id ="ref" HREF="http://www.htmlpoint.com">Registrarme </A></td>
   </tr>
</table>

</body>
</html>