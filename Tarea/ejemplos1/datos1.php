<?php
  echo "<pre>";
   print_r($_POST);
 echo "</pre>";
  echo $_POST['var1'];
  $varx=$_POST['var3'];
  unset($varx); 
  //$varx="";
  if (empty($varx)) {
     echo "<br>vacia";
 }
if (!isset($varx))  echo "<br>NO definida";
else echo "<br>Definida";

?>
