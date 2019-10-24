<?php
if (isset($_POST)) {
    //Conexion a la BD
    require_once 'includes/conexion.php';
    
    $titulo = isset($_POST['titulo']) ? mysqli_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_escape_string($db, $_POST['descripcion']) : false;
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
    
    if (count($errores) == 0) {
        if (isset($_GET['editar'])) {
            $entrada_id = $_GET['editar'];
            $usuario_id = $_SESSION['usuario']['id'];
            $sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion', categoria_id=$id_categoria " .
                    " WHERE id= $entrada_id AND usuario_id = $usuario_id";
        } else {
            $sql = "INSERT INTO entradas VALUES(null, $usuario, $id_categoria, '$titulo', '$descripcion', CURDATE());";
        }
        $guardar = mysqli_query($db, $sql);
        header("Location: index.php");
    } else {
        $_SESSION["errores_entrada"] = $errores;
        if (isset($_GET['editar'])) {
            header("Location: editar-entrada.php?id=".$_GET['editar']);
        } else {
           header("Location: crear-entradas.php"); 
        }
    }
}

