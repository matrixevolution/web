<?php
  $arr0= array(1,2,3);
  echo "<pre>";
  print_r($arr0);
  echo "</pre>";

  $arr1 = array("name" => "John", "age" => 28);
  $arr2["name"] = "John";
  $arr2["age"] = 28;
  if ($arr1 == $arr2) {
    print '$arr1 and $arr2 son iguales' . "\n";
  }


  echo "<br>";
  foreach($arr1 as $cve => $valor)
  {
      echo $cve,": ",$valor,"<br>";
      //print "$cve = $valor";
  }
  
  
?>
