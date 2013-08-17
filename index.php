<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // ¿Nos mandan datos por el formulario?
    include('php_lib/config.ini.php'); //incluimos configuración
    include('php_lib/login.lib.php'); //incluimos las funciones
    //verificamos el usuario y contraseña mandados
    if (login($_POST['usuario'], $_POST['password'])) {

        //acciones a realizar cuando un usuario se identifica
        //EJ: almacenar en memoria sus datos, registrar un acceso a una tabla de datos
        //saltamos al inicio del área restringida
        header('Location: principal.php');
        die();
    } else {
        //acciones a realizar en un intento fallido
        //Ej: mostrar captcha para evitar ataques fuerza bruta, bloqueas durante un rato esta ip, ....
        //preparamos un mensaje de error y continuamos para mostrar el formulario
        $mensaje = 'Usuario o contraseña incorrecto.';
    }
} //fin if post
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
                <a href="#" title="Ir al Inicio"><strong>Sistema</strong> Venado 2.0</a>
                <p>Punto de Venta en Linea</p>
            </header>
            <div id="b">
                <article>
                    <h1>Acceso</h1>                    
                    <p>Introduce lo siguientes datos.</p>
                    <form action="index.php" enctype="multipart/form-data" method="post">
                        <label>Usuario</label>
                        <input name="usuario" type="text">
                        <label>Contraseña</label>
                        <input name="password" type="password">
                        <br>
                        <input class="button" type="submit" value="Ingresar">
                    </form>
                    <?php
                    //si hay algún mensaje de error lo mostramos escapando los carácteres html
                    if (!empty($mensaje))
                        echo('<p class="highlight-1"><strong>Error:</strong> Usuario o Contraseña incorrectos.</p>');
                    ?>
            </div>
            <footer>
                <p>2013 © Venado Papeleria y Merceria, S.A. de C.V. Todos los Derechos Reservados.</p>
            </footer>
        </div>
    </body>
</html>