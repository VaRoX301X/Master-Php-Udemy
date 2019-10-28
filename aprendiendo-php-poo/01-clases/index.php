<?php

// Programación orientada a objetos

//Definir una clase
// Molde para crear mas objetos de tipo coche con caracteristicas parecidas
class Coche {
    // Atributos o propiedades (variables)
    public $color = "rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    // Metodos- antes funciones
    // Acciones que hace el objeto
    
    public function getColor(){
        // This -> busca en esta clase la propiedad X ($color)
        return $this->color;
    }

    public function setColor($color){
        $this -> color = $color;
    }


    // Movimiento
    public function acelerar(){
        $this -> velocidad++;
    }
    public function frenar(){
        $this -> velocidad--;
    }
    public function getVelocidad(){
        return $this -> velocidad;
    }

    public function setModelo($modelo){
        $this -> modelo = $modelo;
    }


} // Fin definicion de la clase

// Crear un objeto o instanciar la clase
$coche = new Coche();
var_dump($coche);

// Usar los metodos
echo $coche->getVelocidad();

$coche -> setColor("amarillo");

echo "<br>El color del coche es: ".$coche->getColor();

// Acelerar el coche 4 veces
$coche -> acelerar();
echo "<br>La velocidad del coche es: ".$coche->getVelocidad();
$coche -> acelerar();
echo "<br>La velocidad del coche es: ".$coche->getVelocidad();
$coche -> acelerar();
echo "<br>La velocidad del coche es: ".$coche->getVelocidad();
$coche -> acelerar();
echo "<br>La velocidad del coche es: ".$coche->getVelocidad();
$coche -> acelerar();
echo "<br>La velocidad del coche es: ".$coche->getVelocidad();
$coche -> frenar();
echo "<br>La velocidad del coche es: ".$coche->getVelocidad();

// Creamos un segundo coche
$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");
var_dump($coche2);