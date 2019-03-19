<?php

/*
 * 1. una función
 * 2. validar un email con filter_var
 * 3. utilizar esa funcion y recoger una variable por GET y validarla
 * 4. mostrar el resultado
 */

if(isset($_GET['email']) && !empty($_GET['email'])){
    if(validarMail($_GET['email'])){
        echo '<h2>El email: '.$_GET['email'].' es CORRECTO</h2>';
    } else {
        echo '<h2>El email: '.$_GET['email'].' es INCORRECTO</h2>';
    }
} else {
    echo '<h2>INTRODUCE UN EMAIL</h2>';
}
function validarMail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
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
    <title>Document</title>
</head>
<body>
<form action="ejercicio2.php" method="get">
    <input type="text" name="email"> <br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
