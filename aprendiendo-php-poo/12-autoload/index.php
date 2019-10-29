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

    /**
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param Usuario $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param Categoria $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return \MisClases\Entrada
     */
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * @param \MisClases\Entrada $entrada
     */
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;
    }

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new \MisClases\Entrada();
    }

    public function informacion(){
        echo __CLASS__;
        echo "<br>";
        echo __METHOD__;
        echo "<br>";
        echo __FILE__;
    }
}
$principal = new Principal();
var_dump($principal);
$usuario = new userAdmin();
var_dump($usuario);

echo "<br>";
echo $principal -> informacion();
echo "<br>";


// Ver los metodos que existen
var_dump(get_class_methods($principal));

//Podemos hacer un array_search para buscar si existe un metodo

// Comprobar si existe una clase
$clase_existe = @class_exists("PanelAdministrador\Usuario");
if($clase_existe) {
    echo "<h1>La clase SI existe</h1>";
} else {
    echo "<h1>La clase NO existe</h1>";
}