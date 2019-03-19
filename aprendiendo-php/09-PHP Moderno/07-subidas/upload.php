<?php


$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif'){

    if(!is_dir('images')){
        mkdir('images', 0777) or die('No se puede crear la carpeta "images"');
    }

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    echo '<h2>Imagen subida correctamente</h2>';
    header('Refresh: 5; URL=index.php');

} else {
    header('Refresh: 5; URL=index.php');
    echo '<h1>Introduce una imagen con un formato correcto</h1>';
}
