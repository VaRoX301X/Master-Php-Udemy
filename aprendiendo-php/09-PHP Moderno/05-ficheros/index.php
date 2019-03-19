<?php

//  Abrir archivo
$archivo = fopen('fichero.txt', 'a+');

// Leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido;
    echo '<br>';
}

// Escribir en un archivo
fwrite($archivo, 'Soy un texto metido desde php'.PHP_EOL);
// Cerrar archivo
fclose($archivo);


// Comprobar si un archivo existe

// Copiar un fichero
if (file_exists('fichero.txt')){
    copy('fichero.txt', 'fichero_copiado.txt') or die('Error al copiar');
} else echo 'No existe el fichero "fichero"';

// Borrar un fichero
if (file_exists('fichero_renombrado.txt')){
    unlink('fichero_renombrado.txt') or die('Error al borrar');
} else echo 'No existe el fichero "fichero_renombrado"';

// Renombrar un fichero
if (file_exists('fichero_copiado.txt')){
    rename('fichero_copiado.txt', 'fichero_renombrado.txt') or die('Error al renombrar');
} else echo 'No existe el fichero "fichero_copiado"';

