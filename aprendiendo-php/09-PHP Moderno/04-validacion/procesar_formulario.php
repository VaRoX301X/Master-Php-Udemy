<?php
if(empty($_POST['nombre'])&&empty($_POST['apellidos'])&&empty($_POST['edad'])&&empty($_POST['email'])&&empty($_POST['pass'])){
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
} else {
    $error = 'faltan_datos';
    header('Location:index.php?error='.$error);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion</title>
</head>
<body>
</body>
</html>