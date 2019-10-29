<?php
namespace MisClases;

class Usuario {
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "mi nombre";
        $this->email = "un email";
    }
}