<?php
/**
 * Created by PhpStorm.
 * User: varox
 * Date: 07/03/2019
 * Time: 23:22
 */

if(isset($_COOKIE['unyear'])){
    echo '<h1>'.$_COOKIE['unyear'].'</h1>';
} else {
    echo 'No existe la cookie';
}
if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
} else {
    echo 'No existe la cookie';
}
?>
<a href="borrar_cookies.php">Borrar cookies</a>
<a href="index.php">Crear cookies</a>
