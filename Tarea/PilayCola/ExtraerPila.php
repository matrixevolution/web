<?php
 /*
 archivo: ExtraerPila.php
 Funcion: Extrae elemento en la pila
 */
 
$pila=array("A","B","C");
 echo "</br> Antes de Extraer </br>";
 print_r($pila);
 $elemento=array_pop($pila);
 echo "</br> Despues de Extraer</br>";
 print_r($pila);
 echo "</br> Elemento Extraido de la Pila</br>";
 echo "$elemento"
 ?>
 