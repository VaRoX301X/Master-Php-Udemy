<?php
/**
 * Created by PhpStorm.
 * User: varox_h8p9537
 * Date: 27/02/2019
 * Time: 18:28
 */

function comprobar($variable){
    if (is_bool($variable)){
        echo $variable.' es booleana';
    } else if (is_int($variable)){
        echo $variable.' es un Int';
    } else if (is_string($variable)){
        echo $variable.' es un string';
    } else if (is_array($variable)){
        echo var_dump($variable);
    } else {
        echo 'no es na';
    }
}

comprobar('hola');
comprobar(234);
comprobar([1,2,3]);
comprobar(true);