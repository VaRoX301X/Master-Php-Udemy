<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="post" enctype="multipart/form-data">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" autofocus="autofocus" required> <br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" maxlength="20" minlength="3" required> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>