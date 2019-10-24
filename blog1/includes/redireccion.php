  
<?php
// Si no hay un usuario identificado, redirige a la pagina principal
if(!isset($_SESSION)){
session_start();
}
if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}