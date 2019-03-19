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
    <h1>Subir imagenes con PHP</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo"> <br>
        <input type="submit" value="enviar">
    </form>

<h1>Listado de imagenes</h1>
    <?php
    $gestor = opendir('./images');
    if ($gestor):
        while(($image = readdir($gestor)) !== false):
            if ($image != '.' && $image != '..'):
                echo '<img src="./images/'.$image.'" width="200px"/> <br>';
            endif;
        endwhile;
    endif;
    ?>
</body>
</html>