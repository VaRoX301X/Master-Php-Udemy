<?php
    /*
     * imprimir por pantalla los cuadrados de los 40 primeros numeros naturales usando un bucle while
     */
    $i = 1;
    do {
        echo "<p>Cuadrado de $i: ".($i*$i)."</p>";
        $i++;
    } while ($i<= 40)
?>
