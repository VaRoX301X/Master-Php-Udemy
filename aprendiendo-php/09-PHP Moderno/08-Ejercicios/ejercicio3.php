<?php

/*
 * hacer una calculadora en php con interfaz de usuario con 2inouts y 4 botones (formulario)
 * sumar, restar, dividir y multiplicar
 */
    $feedback = null;
    $resultado = null;
    if (isset($_POST['n1']) && isset($_POST['n2'])){
        if (!empty($_POST['n1']) && !empty($_POST['n2'])){
            if (isset($_POST['sumar'])){
                $resultado = $_POST['n1'] + $_POST['n2'];
            }
            if (isset($_POST['restar'])){
                $resultado = $_POST['n1'] - $_POST['n2'];
            }
            if (isset($_POST['multiplicar'])){
                $resultado = $_POST['n1'] * $_POST['n2'];
            }
            if (isset($_POST['dividir'])){
                $resultado = $_POST['n1'] / $_POST['n2'];
            }
        } else {
            $feedback = 'Introduce ambos numeros';
        }
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <?php if ($resultado) {
        echo '<h3 style="color:blue;">El numero resultante es: '.$resultado.'</h3>';
    }
    ?>
    <form action="" method="post">
        <label for="n1">Numero 1: </label>
        <input type="number" name="n1"> <br>


        <label for="n2">Numero 2: </label>
        <input type="number" name="n2"> <br>

        <input type="submit" value="+" name="sumar">
        <input type="submit" value="-" name="restar">
        <input type="submit" value="*" name="multiplicar">
        <input type="submit" value="/" name="dividir">

    </form>

    <?php if ($feedback) {
        echo '<h3 style="color:red;">'.$feedback.'</h3>';
    }
    ?>
</body>
</html>
