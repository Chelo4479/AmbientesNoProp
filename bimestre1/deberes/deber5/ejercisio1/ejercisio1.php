
<?php

echo'<html>';
echo'<head>';
echo '<meta charset="utf-8">';
	echo'<title>Ejercisio1</title>';
echo '<link rel="stylesheet" type="text/css" href="css/hoja1.css">';
echo'</head>';

echo'<body>';
echo'<form  method="post">';
echo '</br>';
echo '<h1>Ejercisio1: Conversor de Monedas</h1>';
echo '</br>';

echo '<thead>';

echo '<table >';
echo'<tr>';
echo'<th colspan="2">';
echo'Conversor de Monedas';
echo'</th>';
echo'</tr>';

echo'<tr>';
echo'<th colspan="2">';
echo'</th>';
echo'</tr>';
echo'<tr>';
echo'<th colspan="2">';
echo'</th>';
echo'</tr>';

echo '<tr>';
echo '<th>';
echo'<label for="dolar">Valor en USD: </label>';
echo'<input  name="dolar" type="text" id="dolar" value="">';
echo'</th>';
echo '<th>';
echo'<label for="convertir">Convertir a: </label>';
echo '<select name="convertir" id="convertir">';
echo '<option  value="selecciona">- Selecciona Opcion:</option>';
echo'<option  value="euros">Euros</option>';
echo '<option value="pesos">Pesos Colombianos</option>';
echo '</select>';

echo '</th>';
echo '</tr>';

echo'<tr>';
echo'<th colspan="2">';
echo'</th>';
echo'</tr>';


echo'<tr>';
echo'<th id="thbtn" colspan="2">';
echo '<input id="btn" name="enviar" type="submit" value="CONVERTIR" />';
echo'</th>';
echo'</tr>';

echo'<tr>';
echo'<th colspan="2">';
echo'Resultado: ';
echo'</th>';
echo'</tr>';
echo'<tr>';
echo'<th id="th1" colspan="2">';


$conv = isset($_POST['convertir']) ? $_POST['convertir'] : NULL;
//$conv=$_POST["convertir"];

if (isset($_POST["dolar"])) 
{
	define("cantidad", $_POST["dolar"]);
}
else
{

}
$dolar = isset($_POST['dolar']) ? $_POST['dolar'] : NULL;
//$dolar = $_POST["dolar"];
echo $dolar."\nUSD equivale a : ";

if ($conv=='selecciona') 
{
	echo "\n Ingrese Cantidad";
}
else
{
	if ($conv=='euros') 
{

	echo $dolar*0.918653254;
	echo "\nEuros ";
}
else
{
	echo $dolar*2840.90909;
	echo "\nPesos Colombianos";
}

}


echo'</th>';
echo'</tr>';

echo '</table>';

echo '</thead>';
echo'</body>';
echo'</html>';





?>