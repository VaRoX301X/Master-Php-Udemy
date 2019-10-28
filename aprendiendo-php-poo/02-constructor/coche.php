<?php
class Coche {
    // Atributos o propiedades (variables)
    // Es una mala practica definir valores por definicion
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;


    public function __construct($color = "Rojo", $marca = "Ferrari", $modelo = "Aventador", $velocidad = 300, $caballaje = 500, $plazas = 2)
    {
        $this -> color = $color;
        $this -> marca = $marca;
        $this -> modelo = $modelo;        
        $this -> velocidad = $velocidad;
        $this -> caballaje = $caballaje;
        $this -> plazas = $plazas;
    }

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