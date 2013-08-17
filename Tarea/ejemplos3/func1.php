<?php
  function func ()
  {
    $GLOBALS["var"] = 2;
  }
  $var = 1;
  func();
  print $var;

?>