<?php
/**
 * Created by PhpStorm.
 * User: varox_h8p9537
 * Date: 27/02/2019
 * Time: 18:23
 */

function isEmpty($var){
    if (empty($var)){
        $var = 'Relleno';
        $var = strtoupper($var);
        return $var;
    } else {
        return $var;
    }
}

$jesus = 'Jesus';
$prueba = '';
var_dump(isEmpty($jesus));
var_dump(isEmpty($prueba));