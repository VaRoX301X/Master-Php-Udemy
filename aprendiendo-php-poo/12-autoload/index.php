<?php
require_once 'autoload.php';


/*
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
require_once 'clases/usuario.php';
*/

/*
$usuario = new Usuario();
$entrada = new Entrada();
$categoria = new Categoria();

echo $usuario -> nombre;
echo "<br>";
echo $usuario -> email;

echo '<br>'.($categoria -> descripcion);
*/

// ESPACIOS DE NOMBRES Y PAQUETES

use MisClases\Usuario;
use MisClases\Categoria;
use PanelAdministrador\Usuario as userAdmin;

class Principal {
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new \MisClases\Entrada();
    }
}
$principal = new Principal();
var_dump($principal);
$usuario = new userAdmin();
var_dump($usuario);