<?php
require_once 'autoload.php';


/*
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
require_once 'clases/usuario.php';
*/


$usuario = new Usuario();
$entrada = new Entrada();
$categoria = new Categoria();

echo $usuario -> nombre;
echo "<br>";
echo $usuario -> email;

echo '<br>'.($categoria -> descripcion);