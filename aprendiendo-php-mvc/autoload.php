<?php
function autoload($className){
    include 'controllers/'.$className.'.php';

}
spl_autoload_register('autoload');