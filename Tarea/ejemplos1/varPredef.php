<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title></title>
</head>

<body>
    <?php
       if($_SERVER["HTTP_X_FORWARDED_FOR"]){
         echo "La Ip de tu proxy es: {$_SERVER["REMOTE_ADDR"]}<br>";
         echo "Tu IP es: {$_SERVER["HTTP_X_FORWARDED_FOR"]}";
       }else{
        echo "<b>Tu IP es: </b>".$_SERVER['REMOTE_ADDR']."<br>";
        echo "<b>Tu puerto es: </b>{$_SERVER["REMOTE_PORT"]}<br>";
        echo "<b>Nombre del servidor: </b>{$_SERVER["SERVER_NAME"]}<br>";
        echo "<b>Software: </b>{$_SERVER["SERVER_SOFTWARE"]}<br>";
        echo "<b>Directorio raiz: </b>",$_SERVER['DOCUMENT_ROOT'];
      }
    ?>
</body>

</html>
