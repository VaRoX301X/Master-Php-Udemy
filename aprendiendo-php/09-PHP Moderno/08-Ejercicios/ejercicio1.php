<?php

/*
  * crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion al parametro
  * get counter si está a 1 o a 0
  */

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
} else{
    if(isset($_GET['counter'])){
        if($_GET['counter'] == 1){
            $_SESSION['numero']++;
        } else if($_GET['counter'] == 0){
            $_SESSION['numero']--;
        } else if($_GET['counter'] == 2){
            $_SESSION['numero']=0;
        }
    }
}



?>
<h2>El valor de la sesión numero es: <?= $_SESSION['numero'] ?></h2>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a> <br>
<a href="ejercicio1.php?counter=2">Borrar el valor</a> <br>