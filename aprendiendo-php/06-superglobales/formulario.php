<?php



?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superglobales</title>
</head>
<body>
    <h1>Formulario</h1>
    <form method="POST" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </p>
        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>
