<?php
 $opcion="Tres";
  
 switch ($opcion) {
   case 1:
   case 2:
    echo "Uno y Dos";
   break;
   case "Tres":
     echo "Tres";
   break;
   default:
     echo "Otra";
}

?>
