<?php

function app_autoloader_clases($class){
    require_once 'clases/'.$class.'.php';
}

spl_autoload_register('app_autoloader_clases');