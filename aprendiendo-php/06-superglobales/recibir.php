<?php
    $nombreRecibido = $_POST['nombre'];
    $apellidosRecibido = $_POST['apellidos'];
    echo 'El nombre es: '.$nombreRecibido
        .'<br>'
        .'Los apellidos son: '.$apellidosRecibido;

    var_dump($_POST);
?>