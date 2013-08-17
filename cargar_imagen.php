<?php
require('php_lib/include-pagina-restringida.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistema Venado 2.0</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="robots" content="index,follow,noarchive">
        <link rel="stylesheet" href="css/a.css">
    </head>
    <body>
        <div id="a">
            <header>
                <a href="principal.php" title="Ir al Inicio"><strong>Sistema</strong> Venado 2.0</a>
                <p>Punto de Venta en Linea</p>
            </header>
            <div id="b">
                <article>
                    <h1>Gestión de Imagenes</h1>
                    <form id="form1" name="form1" method="post" action="recibir.php" enctype="multipart/form-data">
                        <label>Selecciona una imagen</label>
                        <input type="file" name="imagen"/>
                        <label>Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" />
                        <input type="submit" name="Aceptar" id="Aceptar" value="Aceptar" class="button"/>
                    </form>
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
                    <ul class="gallery">
                        <?php
                        $conexion = mysql_connect('localhost', 'usr_venado', 'Venado_2.0') or die('No hay conexión a la base de datos');
                        $db = mysql_select_db('venado2.0', $conexion) or die('no existe la base de datos.');

                        $consulta = mysql_query("select * from imagenes");
                        while ($filas = mysql_fetch_array($consulta)) {
                            $ruta = $filas['ruta'];
                            $desc = $filas['descripcion'];
                            ?>
                            <li><img src="<?php echo $ruta; ?>" width="50" height="50"></li>
                        <?php } ?>
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

