<?php

class Usuario {
    private $nombre;
    private $email;

    public function __construct()
    {
        $this->nombre = "Alvaro";
        $this->email = "email";
        echo "<br>Instancia del objeto creada";
    }
    public function __toString()
    {
        return "<br>Hola, ".$this->nombre." estas registrado con ".$this->email;
    }

    public function __destruct()
    {
        echo "<br>Destruyendo el objeto";
    }

}

$usuario = new Usuario();
echo $usuario;



