<?php
if (isset($_POST)) {
    //Conexion a la BD
    require_once 'includes/conexion.php';
    
    $titulo = isset($_POST['titulo']) ? mysqli_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_escape_string($db, $_POST['descripcion']) : false;
    $id_creador = (int)$_SESSION['usuario']['id'];
    $id_categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    //Array de errores
    $errores = array();
    //Validar los datos antes de guardarlos en la base de datos
    if (!empty($titulo)) {
        $titulo_validado = true;
    } else {
        $titulo_validado = false;
        $errores['titulo'] = "El titulo no es valido";
    }
    if (!empty($descripcion)) {
        $descripcion_validado = true;
    } else {
        $descripcion_validado = false;
        $errores['descripcion'] = "La descripcion no es valida";
    }
    if (!empty($id_categoria)) {
        $id_categoria_validado = true;
    } else {
        $id_categoria_validado = false;
        $errores['id_categoria'] = "La id_categoria no es valida";
    }
    
    if(count($errores) == 0){ // Si no hay errores inserta en la base de datos
        $sql = "INSERT INTO entradas VALUES(NULL, $id_creador, $id_categoria,'$titulo','$descripcion', CURDATE());";
        $guardar = mysqli_query($db, $sql);
        // borra errores en caso de que los haya
        if(isset($_SESSION["errores_entrada"])){
            unset($_SESSION["errores_entrada"]);
        }        
        header("Location: index.php");        
    } else {
        $_SESSION["errores_entrada"] = $errores;
        header("Location: crear-entradas.php"); 
    }
}

