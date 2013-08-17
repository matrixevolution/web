<?php
# Etiquetas HTML
echo '<html>';
echo '<head>';
echo '<title>Resultado</title>'; # Ponemos el Titulo
echo '<link href="Style.css" rel="stylesheet" type="text/css" />'; # Conectamos los estilos
echo '</head>';
echo '<body>';
echo '<hr />';
# Hacemos las variables y definimos su valor
$num1 = $_GET["num1"]; # Num2 del Txt1 - nombre
$num2 = $_GET["num2"]; # Num1 del Txt2 - nombre
$type = $_GET["type"]; # Type del Menu: Sumar, restar, multiplicar, dividir - nombre

# Hacemos el If...Else
if($num1=="" and $num2==""){ # Nos fijamos si todos los campos estan rellenados y no vacios
	echo '<div id="blankspaces" class="Label">Por favor rellene todos los campos</div>'; # El Error si los campos estan vacio
}
else{ # Si todos los campos estan completados se cumpliran las siguientes reglas
	switch($type){ # Hacemos el switch. Es muy util. Con la variable $type
		case "sumar":
			$sumar = $num1+$num2;
			echo '<div class="Label">El resultado de la suma es: ', $sumar;
			break;
		case "restar":
			$restar = $num1-$num2;
			echo '<div class="Label">El resultado de la resta es: ', $restar;
			break;
		case "producto":
			$multiplicar = $num1*$num2;
			echo '<div class="Label">El resultado del producto es: ', $multiplicar;
			break;
		case "dividir":
				$dividir = $num1/$num2;
				echo '<div class="Label">El resultado de la division es: ', $dividir;
				break;
		case "modulo":
				$modulo = fmod($num1, $num2);
				echo '<div class="Label">El resultado del modulo es: ', $modulo;
				break;
		case "potencia":
				$potencia = pow($num1,$num2);
				echo '<div class="Label">El resultado de la potencia es : ', $potencia;
				break;
		case "factorial":
				echo '<div class="Label">El resultado del factorial del Numero '. $num1 .' es: ', factorial($num1);
				echo '<hr />';
				echo '<div class="Label">El resultado del factorial del Numero '. $num2 .' es: ', factorial($num2);
				break;
		default:
				echo '<div id="error" class="Label">Ah ocurrido un error por las siguientes cuasas:<br><br>
				   <p><ul class="List" type="1">
				        <li>Usted no ah llenado todos los datos correctamente.</li>
					    <li>Es imposible realizar el calculo</li>
					<li>Ah ocurrido un error interno</li>
				 </ul></p></div>';
				break;
	} # Fin del Switch
} # Fin del If...Else
echo '<hr />';
echo '<a href="index.html">Volver al inicio</a>';
echo '</body>'; # Fin del Body
echo '</html>'; # Fin del HTML

function factorial ($natural)
 {
	$resultado = 1;
 	if ($natural > 0)
 		{
 		$resultado = $natural * factorial(($natural - 1));
 		}
 	return $resultado;
 }
?>