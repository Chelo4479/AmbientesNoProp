<?php
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Formulario</title>';
echo'<link href="estilos.css" rel="stylesheet" type="text/css" media="screen" />';
echo '<style>';
echo 'h1{
  text-align: center;
}

table,tr,th {

 
  border-collapse: collapse;
  text-align: left;
  width:650px;
  margin: 0 auto;
  padding: 15px;
  color: #0431B4;
  


}

h2
{
text-align:left;

}


#btn
{
background-color: #04B431;
color: white;
height:40px;
 width:180px;
  font-size: 20px;
}

A
{
  color:#045FB4;
}

#nombre
{
  width:300px;
  height:30px;
}
#apellido
{
  width:300px;
  height:30px;
}
#correo
{
  width:300px;
  height:30px;
}
#correo2
{
  width:300px;
  height:30px;
}
#password
{
  width:300px;
  height:30px;
}

select
{
  width:100px;
  height:30px;
}

#sexo
{
  width:200px;
  height:30px;
}
';
echo '</style>';

echo '</head>';
echo '<body BGCOLOR="#81DAF5">';

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
echo '<label for="correo">Tu Email: </label>';
echo'</th>';
echo '<th>';
echo'<input  name="correo" type="text" id="correo" value="">';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo '<label for="correo2">Escribir de Nuevo el Correo Electronico: </label>';
echo'</th>';
echo '<th>';
echo'<input  name="correo2" type="text" id="correo2" value="">';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo '<label for="password">Contraseña Nueva: </label>';
echo'</th>';
echo '<th>';
echo'<input  name="password" type="text" id="password" value="">';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo '<label for="sexo">Sexo: </label>';
echo'</th>';
echo '<th>';

echo '<select name="sexo" id="sexo">';
echo '<option selected>- Selecciona el Sexo:</option>';
echo'<option  value="Uno">Hombre</option>';
echo '<option value="Dos">Mujer</option>';
echo '</select>';

echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo '<label for="fechanac">Fecha de Nacimiento: </label>';
echo'</th>';
echo '<th>';

echo '<select name="fechanac" id="fechanac">';
echo '<option selected>Dia:</option>';
          
    for($i=1; $i<=31; $i++) 
      {
         echo "<option value=$i>$i</option>";
      }
        
echo '</select>';

echo '<select name="fechanac" id="fechanac">';
echo '<option selected>Mes:</option>';
          
     for($i=1; $i<=12; $i++)
      {
         echo "<option value=$i>$i</option>";
      }
        
echo '</select>';

echo '<select name="fechanac" id="fechanac">';
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
echo'<A HREF="pagina_deber.html" target="_blank">¿Por qué debo Proporcionar esta Información?</A>';
echo '</th>';
echo '</tr>';

echo '<tr>';
echo '<th>';
echo'<label for="nombre"> </label>';
echo'</th>';
echo '<th>';
echo '<input id="btn" type="submit" value="Registrate" />';
echo '</th>';
echo '</tr>';

echo '</thead>';

echo '</body>';
echo '</html>';