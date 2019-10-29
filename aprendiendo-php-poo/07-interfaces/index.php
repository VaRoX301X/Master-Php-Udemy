<?php

// Obligará a definir los metodos en la clase que lo implemente
interface Ordenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador {
    private $modelo;

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function encender()
    {
        // TODO: Implement encender() method.
    }
    public function apagar()
    {
        // TODO: Implement apagar() method.
    }
    public function reiniciar()
    {
        // TODO: Implement reiniciar() method.
    }
    public function desfragmentar()
    {
        // TODO: Implement desfragmentar() method.
    }
    public function detectarUSB()
    {
        // TODO: Implement detectarUSB() method.
    }

}

$macintos = new iMac();
$macintos -> setModelo("Macbook pro 2019");
var_dump($macintos);