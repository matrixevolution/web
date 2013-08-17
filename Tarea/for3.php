<?php
	$vector[]=Array("matricula"=>"200600","nombre"=>"Pedro Paramo","carrera"=>"ISC");
	$vector[]=Array("matricula"=>"200666","nombre"=>"Lucifer Perez","carrera"=>"ISC");
	$vector[]=Array("matricula"=>"200777","nombre"=>"Yave Mtz","carrera"=>"ISC");
   
   print_r($vector);
	foreach($vector as $v)
	{
	foreach($v as $indice=>$valor)
		echo "<br> $indice: $valor";
	echo "<br>";
}

?>