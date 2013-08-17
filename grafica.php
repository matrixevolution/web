<?php

require('php_lib/include-pagina-restringida.php');

function egresadosTrabajando() {

    include("conexion.php");

    $alumnosTrabando = "SELECT * FROM articulos";

    $cs = mysql_query($alumnosTrabando, $cn) or die("Error en la consulta...2");
    $numeroFilas = mysql_num_rows($cs);

    return $numeroFilas;
}

//FUNCION PARA OBTENER DE LA TABLA EL NUMERO TOTAL DE EGRESADOS DESEMPLEADOS

function egresadosDesempleados() {

    include("conexion.php");

    $alumnosTrabando = "SELECT * FROM clientes" or die("Error en la consulta...");
    $cs = mysql_query($alumnosTrabando, $cn);

    $numeroFilas = mysql_num_rows($cs);

    return $numeroFilas;
}

$vectX = egresadosTrabajando();
$vectY = egresadosDesempleados();

require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
require_once ('jpgraph/jpgraph_line.php');

// Some data
$data = array($vectX, $vectY);

// A new pie graph
$graph = new PieGraph(400, 400, 'auto');

// Don't display the border
$graph->SetFrame(false);

// Uncomment this line to add a drop shadow to the border
// $graph->SetShadow();
// Setup title
$graph->title->Set("Grafica entre la relacion de Articulos y Clientes");
//$graph->title->SetFont(FF_ARIAL,FS_BOLD,18);
$graph->title->SetMargin(8); // Add a little bit more margin from the top
// Create the pie plot
$p1 = new PiePlotC($data);

// Set size of pie
$p1->SetSize(0.35);

// Label font and color setup
//$p1->value->SetFont(FF_ARIAL,FS_BOLD,12);
$p1->value->SetColor('white');

$p1->value->Show();

// Setup the title on the center circle
$p1->midtitle->Set("Grafica\nArticulos \nClientes");
//$p1->midtitle->SetFont(FF_ARIAL,FS_NORMAL,14);
// Set color for mid circle
$p1->SetMidColor('yellow');

// Use percentage values in the legends values (This is also the default)
$p1->SetLabelType(PIE_VALUE_PER);

// The label array values may have printf() formatting in them. The argument to the
// form,at string will be the value of the slice (either the percetage or absolute
// depending on what was specified in the SetLabelType() above.
$lbl = array("adam\n%.1f%%", "bertil\n%.1f%%", "johan\n%.1f%%",
    "peter\n%.1f%%", "Articulos\n%.1f%%", "Clientes\n%.1f%%");
$p1->SetLabels($lbl);

// Uncomment this line to remove the borders around the slices
// $p1->ShowBorder(false);
// Add drop shadow to slices
$p1->SetShadow();

// Explode all slices 15 pixels
$p1->ExplodeAll(15);

// Add plot to pie graph
$graph->Add($p1);

// .. and send the image on it's marry way to the browser
$graph->Stroke();
?>
