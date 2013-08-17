<?php
  function factorial($n)
  {
    if($n==0)
    {
      return 1;
    }
    else
    {
      $valor=$n * factorial($n -1);
      return $valor;
    }
  }

  $valor=factorial(7);
  echo "El factorial de 7 es: $valor";
?>