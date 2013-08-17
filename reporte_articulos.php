<?php

require('php_lib/include-pagina-restringida.php');
include("conexion.php");
require_once('class.ezpdf.php');
$pdf = & new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1, 1, 1.5, 1.5);

$queEmp = "SELECT * FROM articulos ORDER BY id";
$resEmp = mysql_query($queEmp, $cn) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while ($datatmp = mysql_fetch_assoc($resEmp)) {
    $ixx = $ixx + 1;
    $data[] = array_merge($datatmp, array('num' => $ixx));
}
$titles = array(
    'id' => '<b>ID</b>',
    'nombre' => '<b>Nombre</b>',
    'presio' => '<b>Precio</b>',
    'descripcion' => '<b>Descripcion</b>'
);
$options = array(
    'shadeCol' => array(0.9, 0.9, 0.9),
    'xOrientation' => 'center',
    'width' => 500
);
$txttit = "<b>Sistema Venado</b>\n";
$txttit.= "Reporte de Articulos \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> " . date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> " . date("H:i:s") . "\n\n", 10);
$pdf->ezStream();
?>
