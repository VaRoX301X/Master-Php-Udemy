<?php
require_once '../vendor/autoload.php';

$foto_original = 'foto.jpg';
$guardar_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);

//Redimendionar
$thumb ->resize(150,150);

//Recortar
$thumb->crop(50,50,120,120);

$thumb->show();
$thumb->save($guardar_en, "png");