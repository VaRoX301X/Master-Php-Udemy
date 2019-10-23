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