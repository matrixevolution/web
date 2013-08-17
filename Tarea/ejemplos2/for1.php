<?php
   $vector=Array("Fiesta","Tsuru","Beatle","Porsche",null,123,3.14);

   print_r($vector);
   $vector[4]="Ferrari";
   echo "<br>$vector[4]";

   for($i=0;$i<sizeof($vector);$i++)
      echo "<br>$i: $vector[$i]";
?>