<?php
/**
 * Created by PhpStorm.
 * User: varox_h8p9537
 * Date: 20/02/2019
 * Time: 8:34
 */

function calc ($num1, $num2, $negrita = false){
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    if ($negrita){
        echo '<h1>';
    }
    echo 'Suma: '.$suma.'<br>';
    echo 'Resta: '.$resta.'<br>';
    if ($negrita){
        echo '</h1>';
    }
}

calc(1,2);
calc(2,3,true);
calc(4,5,false);
echo '<hr>';
//variables globales y locales
$varGlobal = 123;
function showYear(){
    $year = 2019;
    echo '<h1>'.$year.'</h1>';
}
function showGlobal(){
    global $varGlobal;
    echo $varGlobal;
}

showYear();
showGlobal();
echo '<hr>';
//Funciones variables
function funcVar(){
    echo 'Funcion variable';
}
$hola = 'funcVar';
echo $hola();
echo '<hr>';
//Funciones predefinidas
$prueba1 = 'Hola mundo';
var_dump($prueba1);
echo '<br>';
echo date('d-m-Y');
echo '<br>';
echo time();
echo '<hr>';
//Arrays
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$peliculas2 = ['Nice', 'nope', 'probando el array usando []'];
var_dump($peliculas);

//Recorrer el Array con for
for ($i = 0; $i < count($peliculas2); $i++){
    echo "<li>".$peliculas2[$i]."</li>";
}
//Recorrer Array con foreach
foreach ($peliculas as $peli) {
    echo '<li>'.$peli.'</li>';
}
//Array asociativo
$personas = array(
    'nombre' => 'Varox',
    'Web' => 'xorav.xyz'
);
var_dump($personas);
echo $personas['nombre'];
//include
//incluyes un fragmento en tu pagina
//require
//incluyes un fragmento en tu pagina de manera estricta, si hay errores no se ejecuta


