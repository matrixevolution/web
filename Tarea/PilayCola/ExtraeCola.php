<?php
 /*
 archivo: ExtraeCola.php
 Funcion: Extae elemento en la Cola
 */
 
$cola=array("A","B","C");
 echo "</br> Antes de Insertar </br>";
 print_r($cola);
 array_shift($cola);
 echo "</br> Despues de Extraer</br>";
 print_r($cola);
 echo "</br> Elemento Extraido de la Cola</br>";
 echo "$elemento";
 
?>
 