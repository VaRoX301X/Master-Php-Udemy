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
        echo '<script>console.log("sesion_errores borrado");</script>';
    }

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        echo '<script>console.log("sesion_completado borrado");</script>';
    }   

    if (isset($_SESSION["errores_entrada"])) {
        $_SESSION["errores_entrada"] = null;
        echo '<script>console.log("sesion_errores_entrada borrado");</script>';
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
function conseguirCategoria($conexion, $id) {
    $sql = "SELECT * FROM categorias WHERE id = $id;";
    $categorias = mysqli_query($conexion, $sql);
    $resultado = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = mysqli_fetch_assoc($categorias);
    }
    return $resultado;
}

function conseguirEntradas($conexion, $limit = null, $categoria = null, $busqueda = NULL) {
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e "
            . "INNER JOIN categorias c ON e.categoria_id = c.id ";
    if (!empty($categoria)) {
        $sql .= "WHERE e.categoria_id = $categoria ";
    }
    
      if (!empty($busqueda)) {
        $sql .= "WHERE e.titulo LIKE '%$busqueda%'";
    }
    
    $sql .= "ORDER BY e.id DESC ";
    
    if ($limit) {
        $sql .= "LIMIT 4;";
    }
    $entradas = mysqli_query($conexion, $sql);
    $resultado = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }
    return $entradas;
}