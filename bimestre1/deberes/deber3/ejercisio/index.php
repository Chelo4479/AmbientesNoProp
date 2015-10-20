<?php
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Página 100% PHP</title>';
echo '<style>';
echo 'h1{
  text-align: center;
}


table, th, td{
  border: 1px solid #000000;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto

}

th{
  background-color: #045FB4; 
  color: white;

}


table tr:nth-child(even){
  background-color: #81DAF5; 
  text-align: right;
}

table tr:nth-child(odd){
  background-color: #dddddd;
  text-align: right; 
}


label
{
  
  width:100px;
  display: inline-block;
  font-weight: bold;

}

div
{
  margin: 10px; 
}
';
echo '</style>';
echo '</head>';
echo '<body BGCOLOR="#A4A4A4">';
echo '<h1>Este es el cuerpo de la página.</h1>';
echo '<p>La siguiente tabla es genera .... (elemento <code>&lt;ol&gt;</code>)</p>';
echo '<ol>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '</ol>';

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Columna 1</th>';
echo '<th>Columna 2</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

$i = 0;
$es_impar = true;
while($i < 10){
  echo '<tr class="' . ($es_impar ? 'impar' : 'par') . '">';
  $es_impar = ( $es_impar ? false : true );
  for($j = 0; $j < 2; $j++){
    echo '<td>';
    echo ++$i;
    echo '</td>';
  }
  echo '</tr>';
}

echo '</tbody>';



echo '</table>';


echo '<h1></br>Formulario HTML basico.</h1>';

echo '<div>';
echo '<label for="nombre">Nombre: </label>';
echo'<input name="nombre" type="text" id="nombre" value="">';
echo '</div>';

echo '<div>';
echo '<label for="apellido">Apellido: </label>';
echo'<input name="apellido" type="text" id="apellido" value="">';
echo '</div>';

echo '<div>';
echo '<input type="submit" value="Enviar" />';
echo '</div>';

echo '</body>';
echo '</html>';