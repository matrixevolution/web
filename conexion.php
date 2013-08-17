<?php

$cn = mysql_connect("localhost", "usr_venado", "Venado_2.0") or die("Error en Conexion");
$db = mysql_select_db("venado2.0") or die("Error en Db");
return($cn);
return($db);
?>
