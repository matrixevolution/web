<?php
   echo "<pre>";
   print_r($_POST);
   echo "</pre>";
   echo "hola: ".$_POST['nombre']." ".$_POST['apellido'];   
   echo "<br>PI:";
   printf("%.2f",pi());
?>