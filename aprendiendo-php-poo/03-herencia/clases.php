<?php

// Herencia: la posiblidad de compartir atributos y metodos entre clases

class Persona {
    private $nombre;
    private $apellidos;
    private $altura;
    private $edad;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function hablar(){
        return 'Estoy caminando';
    }
    public function caminar(){
        return 'Estoy caminando';
    }


}

class Informatico extends Persona{

    private $lenguajes;

    /**
     * @return mixed
     */
    public function getLenguajes()
    {
        return $this->lenguajes;
    }

    /**
     * @param mixed $lenguajes
     */
    public function setLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;
    }

    public function programar(){
        return 'Estoy programando';
    }
    public function repararOrdenador(){
        return 'Reparar ordenadores';
    }
    public function hacerOfimatica(){
        return 'Estoy escribiendo en word';
    }
}

class tecnicoRedes extends Informatico{
    public $auditarRedes = false;
    public function auditaRedes(){
        $this -> auditarRedes = !($this->auditarRedes);
    }
}