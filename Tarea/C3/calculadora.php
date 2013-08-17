<?php

if(isset($_POST["par1"]) && isset($_POST["par2"]) && isset($_POST["op"]))
{
	require "funciones.php";

	$par1 = $_POST["par1"];
	$par2 = $_POST["par2"];
	$op = trim($_POST["op"]);
	if(!is_numeric($par1) || !is_numeric($par2)) 
	{
		$resultado = "Ingrese Números";
	} 
	else 
	{
		$par1 = intval($par1, 10);
		$par2 = intval($par2, 10);
		switch ($op)
		{
			case "+": $resultado = sumar($par1, $par2); break;
			case "-": $resultado = restar($par1, $par2); break;
			case "*": $resultado = multiplicar($par1, $par2); break;
			case "/":
				if($par2 != 0) {
					$resultado = dividir($par1, $par2); 
				} else {
					$resultado = "Err. Div. Cero";
				}
				break;
			case "mod": $resultado = modulo($par1, $par2); break;
			case "pot": $resultado = potencia($par1, $par2); break;	
			case "fact": $resultado = factorial($par1+$par2); break;
			case "fibo": $resultado = fibonacci($par1); break;
			default: $resultado = "Error, Solo lo que te Muestro...";
		}
	}
	
	/*Genera respuesta en JSON*/
	echo json_encode($resultado);
	
	exit();
}

function fibonacci ($n)
{
	if ($n == 1 || $n == 2)
  {
    return 1;
  }
  else
  {
  	$Result = fibonacci( $n - 1) + fibonacci( $n - 2 );
   //alert $Result;
   return $Result;
  }
}

?>

<html>
<head>
	<title>Calculadora</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="jquery-1.4.2.js"></script>
  	<script src="json2.js"></script>
  	<script type="text/javascript">
		function CalcularTotal()
		{
			var par1 = $("#par1").val();
			var par2 = $("#par2").val();
			var op = $("#op").val();
			
			/*Solicitamos el resultado con AJAX según el método POST*/
			/*como parámetro (por POST) se envía el par1, par2 y op.*/
			$.post("calculadora.php", {par1: par1, par2: par2, op: op}, function(resultado){
				$("#res").val(resultado);
			}, "json"); /*El parámetro "json" indica que la respuesta desde PHP es en formato JSON*/
		}	
  	</script>
</head>
<body>
  <h3 align="center">CALCULADORA EN Php Y JQuery</h3>
  <form action="calculadora.php" method="POST">
    <table border="1" align="center" width="500px" cellpadding="4">	
    <tr>		
		<td><b>Numero 1:</b></td>
		<td>
			<input type="text" name="par1" id="par1" size="10">
		</td>
    </tr>
    <tr>		
		<td><b>Numero 2:</b></td>
		<td>
			<input type="text" name="par2" id="par2" size="10">
		</td>
    </tr>
    <tr>		
		<td><b>Operador: " + , - , * , / , mod , pot, fact(num1 + num2) fibo(num1 only)"</b></td>
		<td>
			<input type="text" name="op" id="op" size="5">
		</td>
    </tr>
    <tr>		
		<td colspan="2" align="center">
		  <input type="button" name="enviar" value="CALCULAR" onclick="CalcularTotal();">
		  <input type=reset value="Limpiar <C>">
		</td>
    </tr>
    <tr>
		<td colspan="2" align="center">
		  <input type="text" name="res" id="res" size="25">
		</td>
    </tr>
    </table>

  </form>
</body>
</html>