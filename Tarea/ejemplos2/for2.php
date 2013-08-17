<?php
   $vector=Array("Fiesta","Tsuru","Beatle","Porsche",null,123,3.14);

   print_r($vector);
   $vector[4]="Ferrari";
   echo "<br>$vector[4]";

   foreach($vector as $indice=>$valor)
      echo "<br>$indice: $valor";
?>