<h1>Bienvenido</h1>
<?php
    require_once 'controllers/UsuarioController.php';
    require_once 'controllers/NotaController.php';


if (isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
} else {
    echo "La pagina que buscas no existe";
    exit();
}


if(class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
            $action = $_GET['action'];
            $controlador -> $action();
        } else {
            echo "La pagina que buscas no existe";
        }
    } else {
    echo "La pagina que buscas no existe";
    exit();
}



