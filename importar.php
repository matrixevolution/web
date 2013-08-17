<form name="importa" method="post" action="<?php echo $PHP_SELF; ?>" enctype="multipart/form-data" >
    <label>Selecciona el archivo</label>
    <input type="file" name="excel" />
    <input type='submit' name='enviar'  value="Importar"  class="button"/>
    <input type="hidden" value="upload" name="action" />
</form>

<?php
include("conexion.php");

extract($_POST);
if ($action == "upload") {

    $archivo = $_FILES['excel']['name'];
    $tipo = $_FILES['excel']['type'];
    $destino = "importar/bak_" . $archivo;
    if (copy($_FILES['excel']['tmp_name'], $destino))
        echo('<p class="highlight-3"><strong>Exito:</strong> Archivo importado correctamente.</p>');
    else
        echo('<p class="highlight-1"><strong>Error:</strong> Al cargar el archivo.</p>');

    if (file_exists("importar/bak_" . $archivo)) {

        require_once('Classes/PHPExcel.php');
        require_once('Classes/PHPExcel/IOFactory.php');

        $objPHPExcel = PHPExcel_IOFactory::load("importar/bak_" . $archivo);
        $objPHPExcel->setActiveSheetIndex(0);
        $errores = 0;
        $registros = 0;
        $i = 1;
        while ($objPHPExcel->getActiveSheet()->getCell("A" . $i)->getValue() != '') {
            $id = $objPHPExcel->getActiveSheet()->getCell("A" . $i)->getValue();
            $nombre = $objPHPExcel->getActiveSheet()->getCell("B" . $i)->getValue();
            $precio = $objPHPExcel->getActiveSheet()->getCell("C" . $i)->getValue();
            $descripcion = $objPHPExcel->getActiveSheet()->getCell("D" . $i)->getValue();
            $sql = "INSERT INTO articulos VALUES ('','$nombre', '$precio', '$descripcion')";
            $rst = mysql_query($sql, $cn); //Ejecutamos la SQL
            if (!$rst) //Comprobamos si hay errores
                die("Error MySQL de Inserción de Datos"); $i++;
            $registros++;
        }
    } else {
        echo('<p class="highlight-1"><strong>Error:</strong> Necesitas cargar el archivo primero.</p>');
    }
/////////////////////////////////////////////////////////////////////////
    echo('<p class="highlight-3"><strong>Exito:</strong> Carga de Datos, Total: '); echo($registros);echo(' registros y '); echo($errores); echo(' errores</p>');
//una vez terminado el proceso borramos el 
//archivo que esta en el servidor el bak_
    unlink($destino);
}
?>
