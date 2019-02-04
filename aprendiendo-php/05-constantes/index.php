<?php
  // Constantes
  // No se pueden modificar o variar
  define('nombre', 'Alvaro Recalde');
  define('web', 'xorav.xyz');
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constantes</title>
</head>
<body>
    <h1>Constantes</h1>
    <?= nombre.' - Web: '.web ?>
    <h2>Constantes predefinidas</h2>
    <?= PHP_VERSION ?><br>
</body>
</html>
