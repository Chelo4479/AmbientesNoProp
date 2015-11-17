<?php 

include('p_index.php');

echo '<html>';
echo '<head>';

echo '<meta charset="utf-8">';
echo '<title>Formulario</title>';

echo '<link rel="stylesheet" type="text/css" href="css/style.css">';

//echo '<a href="./php/cerrar_sesion.php">cerrar sesión</a>';
echo '</head>';
echo '<body BGCOLOR="#81DAF5">';

echo'<form action="index.php" method="post">';

echo '<h1>Formulario de Registro</h1>';

echo '<table BACKGROUND="imagenes/header.jpg">';
echo '<thead>';


echo'<tr>';
echo '<th colspan="2">';
echo '<h2 id="r1">Registrate</h2>';
echo '<h2>Es Gratis (y lo seguira siendo).</h2>';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo'<label for="nombre">Nombre: </label>';
echo'</th>';
echo '<th>';
echo'<input  name="nombre" type="text" id="nombre" value="">';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo '<label for="apellido">Apellidos: </label>';
echo'</th>';
echo '<th>';
echo'<input  name="apellido" type="text" id="apellido" value="">';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo '<label for="email">Tu Email: </label>';
echo'</th>';
echo '<th>';
echo'<input  name="email" type="text" id="email" value="">';
echo '</th>';
echo '</tr>';

  

echo '<tr>';
echo '<th>';
echo '<label for="password">Contraseña Nueva: </label>';
echo'</th>';
echo '<th>';
echo'<input  name="password" type="password" id="password" value="">';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo '<label for="password2">Confirmar Contraseña : </label>';
echo'</th>';
echo '<th>';
echo'<input  name="password2" type="password" id="password2" value="">';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo '<label for="sexo">Sexo: </label>';
echo'</th>';
echo '<th>';

echo '<select name="sexo" id="sexo">';
echo '<option selected>- Selecciona el Sexo:</option>';
echo'<option  value="h">Hombre</option>';
echo '<option value="m">Mujer</option>';
echo '</select>';

echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo '<label for="fechanac">Fecha de Nacimiento: </label>';
echo'</th>';
echo '<th>';

echo '<select name="dia" id="dia">';
echo '<option selected>Dia:</option>';
          
    for($i=1; $i<=31; $i++) 
      {
         echo "<option value=$i>$i</option>";
      }
        
echo '</select>';

echo '<select name="mes" id="mes">';
echo '<option selected>Mes:</option>';
          
     for($i=1; $i<=12; $i++)
      {
         echo "<option value=$i>$i</option>";
      }
        
echo '</select>';

echo '<select name="anio" id="anio">';
echo '<option selected>Año:</option>';
          
     for($i=1960; $i<=2030; $i++) 
      {
         echo "<option value=$i>$i</option>";
      }
        
echo '</select>';

echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo'<label for="nombre"> </label>';
echo'</th>';
echo '<th>';
echo'<A HREF="index.php" target="_blank">¿Por qué debo Proporcionar esta Información?</A>';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo'<label for="nombre"> </label>';
echo'</th>';
echo '<th>';
echo '<input id="btn" name="enviar" type="submit" value="Registrate" />';
echo '</th>';
echo '</tr>';


echo '</thead>';

echo '</body>';
echo '</html>';
?>