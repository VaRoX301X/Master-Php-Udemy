<?php
    /*
     * recoger dos numeros por GET y hacer operaciones de calculadora basica con ellos
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
    <form method="get" action="ejercicio4.php">
        <p>
            <label for="op1">Operador 1: </label>
            <input type="number" name="op1">
        </p>
        <p>
            <label for="op2">Operador 2: </label>
            <input type="number" name="op2">
        </p>
        <input type="submit" value="Calcular">
        <?php
            if((isset($_GET['op1']) && isset($_GET['op2'])) && (!empty($_GET['op1'])&&!empty($_GET['op2']))){
                $op1 = $_GET['op1'];
                $op2 = $_GET['op2'];
                echo '<p>La suma es: '.($op1+$op2).'</p>';
                echo '<p>La multiplicacion es: '.($op1*$op2).'</p>';
                echo '<p>La division es: '.($op1/$op2).'</p>';
                echo '<p>La resta es: '.($op1-$op2).'</p>';
            } elseif ((isset($_GET['op1'])==null && isset($_GET['op2'])==null) || (empty($_GET['op1'])&&empty($_GET['op2']))){
                echo '<p>Por favor establece los operadores</p>';
            } elseif (isset($_GET['op1'])==null || empty($_GET['op1'])){
                echo '<p>Por favor establece el operador 1</p>';
            } elseif (isset($_GET['op2'])==null || empty($_GET['op2'])) {
                echo '<p>Por favor establece el operador 2</p>';
            }
        ?>

    </form>
</body>
</html>
