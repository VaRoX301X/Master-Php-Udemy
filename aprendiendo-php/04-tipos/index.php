<?php

    /*
     * TIPOS DE DATOS
     * Entero int
     * Coma flotante float
     * Strings string
     * Boleano bool
     * Nulo null
     * Array
     * Objetos
     */
    $entero = 5;
    $flotante = 5.76;
    $string = "hola como estas";
    $booleano = false;
    $nulo = null;
    $array = [1,2,3];

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= $entero.' '.gettype($entero).'<br>'
        .$flotante.' '.gettype($flotante).'<br>'
        .$string.' '.gettype($string).'<br>'
        .$booleano.' '.gettype($booleano).'<br>'
        .$nulo.' '.gettype($nulo).'<br>'
        .$array[0].$array[1].$array[2].' '.gettype($array).'<br>';

    ?>
</body>
</html>
