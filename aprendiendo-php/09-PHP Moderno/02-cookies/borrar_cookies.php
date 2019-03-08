<?php
/**
 * Created by PhpStorm.
 * User: varox
 * Date: 07/03/2019
 * Time: 23:26
 */
if($_COOKIE['micookie']) {
    unset($_COOKIE['micookie']);
    setcookie('micookie', "" ,time()-1000 );

}
header('Location:ver_cookies.php');