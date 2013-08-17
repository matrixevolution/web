<?php
  $varN=13;
  $varT="2+11";
  eval('$varT = '.$varT.';');
  if ($varN==$varT) 
   echo "Son iguales en contenido";


  if ($varN===$varT) 
   echo "<br/>Son iguales en contenido y en tipo";
  else
   echo "<br/>Es distinto el tipo";

  $cad1="Hola ";
  $cad2="Mundo";
  echo "<br/>".$cad1.$cad2;
  $result=(2+5)*3;
  echo "<br/>".$result;
?>
