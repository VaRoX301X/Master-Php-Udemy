<?php

/*
 * fichero que se almacena en le ordenador de l usuario que visita
 * la web, con el fin de recordar datos o rastrear el comportamiento del mismo
 * en la web
 */

// Crear cookies
// setcookie('nombre', 'valor que solo puede ser texto',caducidad, ruta, dominio);

//cookie basica
setcookie('micookie', 'valor de mi cookie');

//cookie con expiracion
setcookie('unyear', 'valor de mi cookie de 365 días', time()+(3600*365));

?>

<a href="ver_cookies.php">Ver las cookies</a>
