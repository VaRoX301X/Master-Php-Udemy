<?php 


if(isset($_POST)){

    require_once 'includes/conexion.php';

    if(!isset($_SESSION)){
        session_start();  
    }
    

    //Recoger valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']): false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']): false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']): false;

    //Validar los datos antes de guardarlos en la base de datos
    $errores = array();
    //Validar campo NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        echo 'El nombre es valido';
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre ($nombre) no es valido";
    }

    //Validar campo APELLIDOS
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        echo 'Los apellidos son validos';
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos ($apellidos) no son validos";
    }

    //Validar campo EMAIL
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'El email es valido';
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email ($email) no es valido";
    }

    //Validar campo PASSWORD
    if(!empty($password)){
        echo 'El password es valido';
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "El password ($password) no es valido (está vacio)";
    }


    $guardar_usuario = false;
    if((count($errores) == 0) && ($nombre_validado && $apellidos_validado && $email_validado && $password_validado)){
        $guardar_usuario = true;


        // Cifrar la contraseña (cost es el numero de veces que lo cifra)
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

        //INSERTAR USUARIO EN LA TABLA DE USUARIOS DE LA BBDD
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos','$email','$password_segura', CURDATE())";
        $guardar = mysqli_query($db, $sql);
        if($guardar){
            $_SESSION['completado'] = 'El registro se ha completado con exito';
        } else {
            $_SESSION['errores']['general'] = 'Fallo al guardar el usuario';
        }
    } else {
        $_SESSION['errores'] = $errores;
        header('Location: index.php'); // redirige a index si hay errores
    }

}


header('Location: index.php');