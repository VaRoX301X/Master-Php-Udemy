<?php


if (isset($_POST)){
    // Iniciar la sesion y la conexion a la base de datos
    if(!isset($_SESSION)){
        session_start();
    } elseif(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }
    
    require_once 'includes/conexion.php';


    //Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    

    // Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login)==1){
        $usuario = mysqli_fetch_assoc($login);
        //Comprobar contraseña 
        $verify = password_verify($password, $usuario['password']);

        if($verify) {
            // Utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

            if(isset($_SESSION['error_login'])){
                unset($_SESSION['error_login']);
            }
        } else {
            $_SESSION['error_login'] = 'Login incorrecto';
        }
    }
}
//Redirigir al index
header('Location: index.php');