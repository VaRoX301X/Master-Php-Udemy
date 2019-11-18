<?php



    class NotaController {
        public function listar(){
            //Modelo
            require_once 'models/nota.php';

            //Logica del controlador
            $nota = new Nota();
            $nota -> setNombre('Hola');
            $nota -> setContenido('Hola mundo php mvc');
            // Vista
            require_once 'views/nota/listar.php';
        }
        public function crear(){

        }
        public function borrar(){

        }

    }