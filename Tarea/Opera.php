<?php
if(isset($_POST['ej']) && $_POST['ej'] == 'Ejecutar'){
    if(!empty($_POST[a]) && !empty($_POST[b]) && !empty($_POST[opr])){
        // verifico si los datos enviados son numericos (numeros)
        if(ctype_digit($_POST[a]) && ctype_digit($_POST[b])){
            $a = $_POST[a];
            $b = $_POST[b];
            $opr = $_POST[opr];
            $result = '$a'.$opr.'$b';
            echo $result;
            //var_dump($a,$opr,$b);
        }else{
             echo "a y b tienen que ser numeros";
        }
    }else{
        echo "No puede enviar campos vacios";
    }
}
?>
<form name="mat" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="a" />
    <select name="opr">
        <option value="">Operador</option>
        <option value="+">Sumar</option>
        <option value="-">Restar</option>
        <option value="*">Multiplicar</option>
        <option value="/">Dividir</option>
    </select>
    <input type="text" name="b" />
    <input type="submit" name="ej" value="Ejecutar" />
</form> 