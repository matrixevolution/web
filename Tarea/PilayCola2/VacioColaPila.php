<?php
 /*
 archivo: VacioColaPila.php
 Funcion: Extae elemento en la Cola
 */
 /************************/
 function vacio($a)
 {
 $resultado=True;   
$v=sizeof($a);
 if ($v==0)
  { $resultado==False;
   }
 return $resultado;
 }
 /************************/
 
$cola=array("A","B","C");
 $pila=array();
 if (vacio($cola)==True)
    { echo "La Cola esta Vacia";
       }
 else {
 echo "Cola no esta Vacia";
      }
 if (vacio($pila)==True)
    { echo "La Pila esta Vacia";
       }
 else {
 echo "La Pila no esta Vacia";
      }
 
?>
 