<?php
  if(!isset($numero))
     $numero=10;
  echo "<br><b>$numero!</b>= ";
  $factorial=1;
  do{
    echo $numero." X ";
    $factorial*=$numero;
    $numero--;

  }while($numero>1);
  echo "1 = <b>$factorial</b>";
?>