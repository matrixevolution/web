<?php

require('php_lib/include-pagina-restringida.php');

include("conexion.php");

$rutaEnServidor = 'images/productos';
$rutaTemporal = $_FILES['imagen']['tmp_name'];
$nombreImagen = $_FILES['imagen']['name'];
$rutaDestino = $rutaEnServidor . '/' . $nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);

$desc = $_POST['descripcion'];

$sql = "INSERT INTO imagenes (ruta,descripcion) values('" . $rutaDestino . "','" . $desc . "')";
$res = mysql_query($sql, $cn);

if ($res) {
    echo 'inserción con exito';
} else {
    echo 'no se puedo insertar';
}
?>
