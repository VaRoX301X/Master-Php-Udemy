<?php
/**
 * Created by PhpStorm.
 * User: varox_h8p9537
 * Date: 21/02/2019
 * Time: 13:46
 */

$array = array();
$i = 0;
while (count($array)<120) {
    array_push($array, $i);
    $i++;
}

var_dump($array);
