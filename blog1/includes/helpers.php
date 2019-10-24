<?php

function mostrarError($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>$errores[$campo]</div>";
    }
    return $alerta;
}

// Reestablece los valores de error o exito para que no aparezcan siempre
function borrarErrores(){
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
        echo '<script>console.log("sesion_errores borrado");</script>';
    }

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
        echo '<script>console.log("sesion_completado borrado");</script>';
    }   
 
}

function conseguirCategorias($conexion) {
    $sql = "SELECT * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexion, $sql);

    $resultado = array();

    if($categorias && mysqli_num_rows($categorias)>=1){
        $resultado = $categorias;
    }

    return $resultado;
}

function conseguirUltimasEntradas($conexion){
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
        "INNER JOIN categorias c ON e.categoria_id = c.id ".
        "ORDER BY e.id DESC LIMIT 4";
    
    $entradas = mysqli_query($conexion, $sql);
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $resultado = $entradas;
    }
    return $resultado;
}