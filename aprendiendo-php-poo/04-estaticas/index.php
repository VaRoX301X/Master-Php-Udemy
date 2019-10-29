<?php

require_once 'configuracion.php';

Configuracion::setColor("blue");
Configuracion::setEntorno("Localhost");
Configuracion::setNewsletter(true);

echo Configuracion::$color."<br>";
echo Configuracion::$entorno."<br>";
echo Configuracion::$newsletter."<br>";

$configuracion = new Configuracion();
$configuracion::$color = "Green";
echo $configuracion::$color;