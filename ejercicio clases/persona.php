<?php

    class Persona {

        //atributos
        public $nombre = array();
        public $apellido = array();

        //metodos
        public function guardarDatos($nombre, $apellido){
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
        }

        public function mostrarDatos(){
            for($i = 0; $i < count($this->nombre); $i++){
                self::formato($this->nombre[$i], $this->apellido[$i]);
            }
        }

        public function formato($nombre, $apellido){
            echo "Nombre: " . $nombre . " | Apellido: " . $apellido . "<br>";
        }

    }

    $persona = new Persona();
    $persona->guardarDatos("Carlos", "Fernandes");
    $persona->guardarDatos("Uriel", "Hernandez");
    $persona->mostrarDatos();


?>