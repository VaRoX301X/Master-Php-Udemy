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

        <label for="boton">Boton: </label>
        <input type="button" name="boton" value="clickame" required> <br>

        <label for="gender">Sexo: </label>
        <input type="checkbox" name="gender" value="Hombre" required>
        <input type="checkbox" name="gender" value="Mujer" required> <br>

        <label for="color">Color: </label>
        <input type="color" name="color" required> <br>

        <label for="fecha">Fecha: </label>
        <input type="date" name="fecha" required> <br>

        <textarea name="hola" id="" cols="30" rows="10"></textarea>

        Peliculas
        <select name="" id="">
            <option value="">Spiderman</option>
            <option value="">Batman</option>
            <option value="">Jey</option>
        </select>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>