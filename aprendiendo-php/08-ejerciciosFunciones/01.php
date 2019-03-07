<?php
/**
 * Created by PhpStorm.
 * User: varox_h8p9537
 * Date: 21/02/2019
 * Time: 13:34
 */
$prueba = [3,2,4,5,7,33,1];
echo '<h1>Recorrer y mostrar</h1>';
foreach ($prueba as $num){
    echo ' '.$num;
}
echo '<h1>Recorrer y mostrar ORDENADO</h1>';
sort($prueba);
for ($i=0;$i<count($prueba);$i++){
    echo $prueba[$i].' ';
}

echo 'La longitud del Array es de: '.count($prueba);

buscarNumero(5);

function buscarNumero($num){
    global $prueba;
    foreach ($prueba as $numb){
        if ($num == $numb){
            echo "<script>alert('encontrado el numero ' + $num)</script>";
        }
    }
}

//EXISTE UN METODO LLAMADO array_search