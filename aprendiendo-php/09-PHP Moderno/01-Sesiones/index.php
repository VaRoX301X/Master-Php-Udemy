<?php
/**
 * Created by PhpStorm.
 * User: varox_h8p9537
 * Date: 01/03/2019
 * Time: 9:35
 */

// almacenar y persistir datos mientras el usuario navega por la web hasta que
// cierra la sesion o el navegador
session_start();

// variable local
$varaible_nombre = 'Soy una cadena de teto';

//variable de sesion
$_SESSION['variable_persistente'] = 'Hola soy una sesion activa';

echo $varaible_nombre.'<br>';
echo $_SESSION['variable_persistente'];

?>
<br>
<a href="./pagina1.php">Ir a pagina 1</a>
