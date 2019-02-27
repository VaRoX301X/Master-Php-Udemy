<?php
/**
 * Created by PhpStorm.
 * User: varox_h8p9537
 * Date: 27/02/2019
 * Time: 18:36
 */

$arrayCuadrado = [
    ['JUEGOS', 'FARCRY', 'WOW'],
    ['PERSONAJES', 'DORORO', 'PERSIA'],
    ['CALISTENIA', 'FLEXIONES', 'DOMINADAS']
];
echo '<table style="width:100%">';
for ($i = 0; $i<sizeof($arrayCuadrado); $i++){
    echo '<tr>';
    for ($j = 0; $j<sizeof($arrayCuadrado[$i]); $j++){
        echo '<td>'.$arrayCuadrado[$i][$j].'</td>';
    }
    echo '</tr>';
}

$arrayMejor = array(
    'JUEGOS' => array('FARCRY','WOW'),
    'PERSONAJES' => array('DORORO','PERSIA'),
    'CALISTENIA' => array('FLEXIONES','DOMINADAS')
);

$categorias = array_keys($arrayMejor);

?>

<table border="1">
    <tr>
        <?php foreach ($categorias as $categoria): ?>
            <th><?= $categoria ?></th>
        <?php endforeach; ?>
    </tr>
</table>
