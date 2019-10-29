<?php
require_once 'clases.php';

$persona = new Persona();
$persona -> setNombre('Alvaro');
var_dump($persona);

$informatico = new Informatico();
$informatico -> setLenguajes(['Python','C++','Js','PHP']);
var_dump($informatico);
$auditor = new tecnicoRedes();
var_dump($auditor);