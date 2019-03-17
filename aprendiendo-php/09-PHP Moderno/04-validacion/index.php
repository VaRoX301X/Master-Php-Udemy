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
    <h1>Validar formularios en PHP</h1>
    <?php
        if (isset($_GET['error'])){
            $error = $_GET['error'];
            if ($error == 'faltan_datos'){
                echo '<strong style="color:red">Rellena todos los datos del formulario</strong>';
            }
        }
    ?>
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required pattern="[A-Za-z]+"> <br>
        <label for="apellidos">apellidos</label>
        <input type="text" name="apellidos" required pattern="[A-Za-z]+"> <br>
        <label for="edad">edad</label>
        <input type="number" name="edad" pattern="[0-9]+"> <br>
        <label for="email">email</label>
        <input type="text" name="email" required> <br>
        <label for="pass">contraseña</label>
        <input type="password" name="pass" required> <br>
        <input type="submit"  value="enviar">

    </form>
</body>
</html>