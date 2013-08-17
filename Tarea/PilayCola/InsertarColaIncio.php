<?php
 /*
 archivo: InsertarColaIncio.php
 Funcion: Inserta elemento en el inico de la  Cola
 */
 
$cola=array("A","B","C");
 $elemento="D";
 echo "</br> Antes de Insertar </br>";
 print_r($cola);
 array_unshift($cola,$elemento);
 echo "</br> Despues de Extraer</br>";
 print_r($cola);
 ?>
 