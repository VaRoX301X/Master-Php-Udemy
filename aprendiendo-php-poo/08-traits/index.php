<?php

trait Utilidades {
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}



class Coche {
    public $nombre = "Cochesito";
    public $marca;

    use Utilidades;
}
class Persona {
    public $nombre;
    public $apellidos;
}
class Videojuego {
    public $nombre;
    public $anio;
}

$coche = new Coche();
$persona = new Persona();
$videojuego = new Videojuego();

$coche->mostrarNombre();