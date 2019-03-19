<?php
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
} else {
    echo 'Ya existe la carpeta "mi_carpeta"';
}

// Borrar
// rmdir('mi_carpeta')
echo '<hr><h1>Contenido de la carpeta</h1>';
if ($gestor = opendir('./mi_carpeta')){
    while (false !== ($archivo = readdir($gestor))){
        if ($archivo != '.' && $archivo != '..')
        echo '<h2>'.$archivo.'</h2></br>';

    }
}