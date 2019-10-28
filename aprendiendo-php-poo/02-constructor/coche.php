<?php
class Coche {
    // Atributos o propiedades (variables)
    // Es una mala practica definir valores por definicion

    //Public - podemos acceder desde cualquier lugar, dentro o fuera de la clase actaul
    // o dentro de clases que hereden de esta 
    public $color;
    //Protected - Podemos acceder desde la clase que los define y desde clases que hereden
    protected $marca;
    //Private - unicamente se puede acceder desde esta clase
    private $modelo;
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
    public function getModelo(){
        return $this -> modelo;
    }

    public function setMarca($marca){
        $this -> marca = $marca;
    }

    // Indicamos que tipo de dato se pasa por la funcion (Coche $miObjeto)
    public function mostrarInformacion(Coche $miObjeto){
        $informacion = "<h1>Información del coche</h1>";
        $informacion .= "<br>Color: ".$miObjeto->color;
        $informacion .= "<br>Marca: ".$miObjeto->marca;
        $informacion .= "<br>Modelo: ".$miObjeto->modelo;
        $informacion .= "<br>velocidad: ".$miObjeto->velocidad;        
        $informacion .= "<br>Caballaje: ".$miObjeto->caballaje;
        $informacion .= "<br>Plazas: ".$miObjeto->plazas;

        return $informacion;

    }

} // Fin definicion de la clase