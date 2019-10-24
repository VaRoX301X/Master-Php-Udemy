<?php
if (isset($_POST)) {
    //Conexion a la BD
    require_once 'includes/conexion.php';
    
    $nombre = isset($_POST['nombre']) ? mysqli_escape_string($db, $_POST['nombre']) : false;
    
    //Array de errores
    $errores = array();
    //Validar los datos antes de guardarlos en la base de datos
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    
    if(count($errores) == 0){ // Si no hay errores inserta en la base de datos
        $sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
        $guardar = mysqli_query($db, $sql);
    }
}
header("Location: index.php");