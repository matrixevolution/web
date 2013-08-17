<?php
 /*
 archivo: InsertarCola.php
 Funcion: Inserta elemento en la cola
 */
 
$cola=array("A","B");
 echo "</br> Antes de Insertar </br>";
 print_r($cola);
 array_push($cola,"C");
 echo "</br> Despues de Insertar</br>";
 print_r($cola);
 
?>
 