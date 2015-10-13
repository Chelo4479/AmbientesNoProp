<?php

function generar_tabla(){

	$i = 0;
	echo '<table>';

	while($i < 100)
	{

		echo '<tr>';

		for($j=0; $j < 10; $j++)
		{
			//$es_primo = es_primo( $i);
			echo '<td>';

			if(es_primo($i))
			{
				echo '<strong>'. $i++ .'</strong>';
			}
			else
				echo $i++;
			/*$redColor = "";
			if ($es_primo==true)$redColor = 'class="rojo"';*/

			//echo ++$i; //incementar i e implemetanr en pantalla
			//echo $i++;// tengo 0 y luego incremento en  1
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';

}

function es_primo($num)
{
	$residuo=0;
	$contador = 0;
	

	for($j=1;$j<=$num;$j++)
	{
		$residuo=$num%$j;
		if($residuo==0) $contador++;	
	}

	if($contador==2)
	{
		//$es_primo = true;
      
		//echo " ". $num;//para COMPROBAR numeros primos
		
		return true;

	}
	else 
	return false;//$es_primo=false;

}


?>

<html>
<link rel="stylesheet" type="text/css" href="css/estilo1.css">
<head>
	<title></title>
</head>
<body>


    <table>
    	<tr>
    		<td  id="celda1"><strong >TABLA 100 PRIMEROS NUMEROS NATURALES</strong><br>
    		<strong id="s2">NUMEROS PRIMOS EN ROJO</td>
    	</tr> 
    	
    </table>

<?php generar_tabla(); ?>


</body>
</html>