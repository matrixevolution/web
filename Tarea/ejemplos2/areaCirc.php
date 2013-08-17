<?php
  define("PI", pi());
  //echo PI;
  
  $radio=10;
  $area=PI*pow($radio,2);
  printf("%.2f",$area);
  echo "<br>Area: $area";
?>
