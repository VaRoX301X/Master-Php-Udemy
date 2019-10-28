<?php

require_once 'coche.php';

$coche0 = new Coche("Amarillo");
$coche1 = new Coche("Rojo","Seat");

var_dump($coche0);
var_dump($coche1);

// public
$coche0 -> color = "Purpura";
// protected
$coche0 -> setMarca("BMW");
// private
echo $coche0 -> getModelo();
