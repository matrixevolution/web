<?php

function sumar($a, $b)
{
	return ($a + $b);
}

function restar($a, $b)
{
	return ($a - $b);
}

function multiplicar($a, $b)
{
	return ($a * $b);
}

function dividir($a, $b)
{
	return ($a / $b);
}

function modulo($a, $b)
{
	return fmod($a, $b);
}

function potencia($a, $b)
{
	return pow($a, $b);
}

function factorial($a)
{
	return factoria($a);
}

function factoria ($natural)
 {
	$resultado = 1;
 	if ($natural > 0)
 		{
 		$resultado = $natural * factoria(($natural - 1));
 		}
 	return $resultado;
 }

?>