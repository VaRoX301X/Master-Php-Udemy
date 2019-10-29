<?php

class Usuario {
    private $nombre;
    private $email;

    public function __construct()
    {
        echo "<br>Instancia del objeto creada";
    }
    public function __destruct()
    {
        echo "<br>Destruyendo el objeto";
    }

}

$usuario = new Usuario();

for($i=0;$i<=200;$i++) {
    echo "<br>$i";
}

