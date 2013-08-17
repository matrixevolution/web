<?php
  $planetas=array("venus");
  print_r($planetas); 
  echo "<br>";
  array_push($planetas,"tierra","jupiter");//I. al final
  print_r($planetas); 
  echo "<br>";
  array_unshift($planetas,"mercurio");//I. al principio
  print_r($planetas); 
  echo "<br>";
  array_splice($planetas,3,0,"marte");//I. en medio
  print_r($planetas); 
  echo "<br>";
  array_pop($planetas);//E. al final
  print_r($planetas); 
  echo "<br>";
  array_shift($planetas);//E. al principio
  print_r($planetas); 
  echo "<br>";
  array_splice($planetas,1,-1);//E. al principio
  print_r($planetas); 
  echo "<br>";

?>