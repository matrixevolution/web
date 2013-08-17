<?php
require('php_lib/include-pagina-restringida.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sistema Venado 2.0</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="robots" content="index,follow,noarchive">
        <link rel="stylesheet" href="css/a.css">
    </head>
    <?php
    include("conexion.php");

    $var = "";
    $var1 = "";
    $var2 = "";
    $var3 = "";
    $var4 = "";

    if (isset($_POST["btn1"])) {
        $btn = $_POST["btn1"];
        $bus = $_POST["txtbus"];
        if ($btn == "Buscar") {

            $sql = "select * from articulos where id='$bus'";
            $cs = mysql_query($sql, $cn);
            while ($resul = mysql_fetch_array($cs)) {
                $var = $resul[0];
                $var1 = $resul[1];
                $var2 = $resul[2];
                $var3 = $resul[3];
            }
        }
        if ($btn == "Nuevo") {

            $sql = "select count(Cod_Alu),Max(Cod_Alu) from alumnos";
            $cs = mysql_query($sql, $cn);
            while ($resul = mysql_fetch_array($cs)) {
                $count = $resul[0];
                $max = $resul[1];
            }
            if ($count == 0) {
                $var = "A0001";
            } else {
                $var = 'A' . substr((substr($max, 1) + 10001), 1);
            }
        }
        if ($btn == "Agregar") {
            $id = $_POST["txtcod"];
            $nom = $_POST["txtnom"];
            $pre = $_POST["txtape"];
            $des = $_POST["txttel"];
            $sql = "insert into articulos values ('$id','$nom','$pre','$des')";

            $cs = mysql_query($sql, $cn);
            echo "<script> alert('Se inserto el registro correctamente');</script>";
        }
        if ($btn == "Actualizar") {
            $id = $_POST["txtcod"];
            $nom = $_POST["txtnom"];
            $pre = $_POST["txtape"];
            $des = $_POST["txttel"];

            $sql = "update articulos set nombre='$nom',presio='$pre',descripcion='$des' where id='$id'";

            $cs = mysql_query($sql, $cn);
            echo "<script> alert('Se actualizo correctamente');</script>";
        }

        if ($btn == "Eliminar") {
            $id = $_POST["txtcod"];

            $sql = "delete from articulos where id='$id'";

            $cs = mysql_query($sql, $cn);
            echo "<script> alert('Se elimnino correctamente');</script>";
        }
    }
    ?>
    <body>
        <div id="a">
            <header>
                <a href="principal.php" title="Ir al Inicio"><strong>Sistema</strong> Venado 2.0</a>
                <p>Punto de Venta en Linea</p>
            </header>
            <div id="b">
                <article>
                    <h1>Gestión de Articulos</h1>
                    <form name="fe" action="" method="post">                      
                        <label>Buscar</label>
                        <input type="text" name="txtbus"/>
                        <p>
                            <input type="submit" name="btn1" class="button"  value="Buscar"/>
                            <input type="submit" name="btn1" class="button"  value="Listar"/>
                            <input type="button" name="btn2" class="button"  value="Generar Reporte" onclick="window.location.href='reporte_articulos.php'"/>  
                        </p>
                        <label>ID</label>
                        <input type="text" name="txtcod" value="<?php echo $var ?>"/>
                        <label>Nombre</label>
                        <input type="text" name="txtnom"  value="<?php echo $var1 ?>"/>
                        <label>Precio</label>
                        <input type="text" name="txtape"  value="<?php echo $var2 ?>"/>
                        <label>Descripción</label>
                        <textarea name="txttel"><?php echo $var3 ?></textarea>
                        <p>
                            <input type="submit" name="btn1" class="button"  value="Actualizar"/>
                            <input type="submit" name="btn1" class="button"  value="Eliminar"/>
                            <input type="submit" name="btn1" class="button"  value="Agregar"/>
                        </p>
                    </form>
                    <h3>Importar datos a la base de datos:</h3> 
                    <?php include 'importar.php' ?>;
                    <?php
                    if (isset($_POST["btn1"])) {
                        $btn = $_POST["btn1"];

                        if ($btn == "Listar") {

                            $sql = "select * from articulos";
                            $cs = mysql_query($sql, $cn);
                            echo"<center>
<table>
<caption>Listado de Articulos</caption>
<tbody>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Descripción</th>
</tr>";
                            while ($resul = mysql_fetch_array($cs)) {
                                $var = $resul[0];
                                $var1 = $resul[1];
                                $var2 = $resul[2];
                                $var3 = $resul[3];
                                echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
</tr>";
                            }

                            echo "</tbody></table>
</center>";
                        }
                    }
                    ?>
                </article>
                <aside>
                    <?php include("includes/menu_principal.php"); ?>
                    <h4>Acerca del Sistema</h4>
                    <div id="c">
                        <img src="images/jonas-jacek.png" alt="Jonas Jacek">
                        <p>Sistema Venado 2.0</p>
                        <p>Hola que hace?</p>
                        <p>Venadeando y tu k haces?</p>
                    </div>
                    <h4>Galeria de Productos</h4>
                    <ul class="gallery">
                        <li><a href="index.html"><img src="images/img1.png" alt="#"/></a></li>
                        <li><a href="index.html"><img src="images/img2.png" alt="#"/></a></li>
                        <li><a href="index.html"><img src="images/img3.png" alt="#"/></a></li>
                    </ul>
                    <ul class="gallery">
                        <li><a href="index.html"><img src="images/img4.png" alt="#"/></a></li>
                        <li><a href="index.html"><img src="images/img5.png" alt="#"/></a></li>
                        <li><a href="index.html"><img src="images/img6.png" alt="#"/></a></li>
                    </ul>
                    <h4>Promociones</h4> 
                    <div class="adspace"> 
                        <a href="http://jabz.net/" rel="me"><img src="images/jabz-logo.png" alt="Jabz Internet Marketing GmbH" title="Jabz Internet Marketing GmbH"/></a> 
                    </div>
                    <h4>Example Blogroll</h4>
                    <ul>
                        <li><a href="http://jabz.net/">Jabz Internet Marketing GmbH</a></li>
                        <li><a href="http://jabz.net/contact/jonas-jacek">Jonas Jacek</a></li>
                        <li><a href="http://www.w3.org/">World Wide Web Consortium</a></li>
                        <li><a href="http://www.getfirefox.com/">Firefox Web Browser</a></li>
                    </ul>
                    <h4>Example Tag Cloud</h4>
                    <ul id="tagcloud">
                        <li class="tagcloudsize-1"><a href="#">Lorem</a></li>
                        <li class="tagcloudsize-2"><a href="#">Ipsum</a></li>
                        <li class="tagcloudsize-3"><a href="#">Dolor</a></li>
                        <li class="tagcloudsize-2"><a href="#">Sit Amet</a></li>
                        <li class="tagcloudsize-1"><a href="#">Consectetur</a></li>
                    </ul> 
                </aside>
            </div>
            <footer>
                <p>2013 © Venado Papeleria y Merceria, S.A. de C.V. Todos los Derechos Reservados.</p>
            </footer>
        </div>
    </body>
</html>
