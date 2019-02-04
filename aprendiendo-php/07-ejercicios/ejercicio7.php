<?php
/*
 * mostrar todos los numeros que lleguen por un parametro get que sean IMPARES
 */

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
<form method="get" action="ejercicio7.php">
    <p>
        <label for="op1">numero 1: </label>
        <input type="number" name="op1">
    </p>
    <p>
        <label for="op2">numero 2: </label>
        <input type="number" name="op2">
    </p>
    <input type="submit" value="Mostrar numeros">
    <?php
    if((isset($_GET['op1']) && isset($_GET['op2'])) && (!empty($_GET['op1'])&&!empty($_GET['op2']))){
        $op1 = $_GET['op1'];
        $op2 = $_GET['op2'];
        echo '<br>Los numeros son: ';
        if($op1<$op2){
            while ($op1<=$op2){
                if ($op1%2 != 0){
                    echo $op1.' ,';
                }
                $op1++;
            }
        } else echo '<br>El numero 1 debe ser menor que el numero 2';

    } elseif ((isset($_GET['op1'])==null && isset($_GET['op2'])==null) || (empty($_GET['op1'])&&empty($_GET['op2']))){
        echo '<p>Por favor establece los numeros</p>';
    } elseif (isset($_GET['op1'])==null || empty($_GET['op1'])){
        echo '<p>Por favor establece el numero 1</p>';
    } elseif (isset($_GET['op2'])==null || empty($_GET['op2'])) {
        echo '<p>Por favor establece el numero 2</p>';
    }
    ?>
</body>
</html>
