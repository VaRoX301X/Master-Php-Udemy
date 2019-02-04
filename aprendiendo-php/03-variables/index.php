<?php
$mi_primera_variable = "Hola mundo desde una variable";
$variable_numerica1 = 5;
$variable_numerica2 = 10;
$variable_booleana = true;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables PHP</title>
</head>
<body>
    <?= $mi_primera_variable.'<br>' ?>
    <?= 'Variable numerica 1: '.$variable_numerica1.'<br>Variable numerica 2: '.$variable_numerica2 ?>
    <?= '<br>Suma de ambas: '.($variable_numerica1+$variable_numerica2) ?>


</body>
</html>
