<?php

function Sumar()
{
      $numeroParametros = func_num_args();
	$parametros = func_get_args();
	$suma = 0;

	foreach($parametros as $valor)
	{
		$suma += $valor;
	}
	
	return $suma;
}

echo "Total:".sumar()."<br>";
echo "Total:".sumar(5,8)."<br>";
echo "Total:".sumar(5,3,1)."<br>";

?>