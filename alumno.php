<?php

class Alumno {

    private $id;
    private $nombre;
    private $apellido;
    private $edad;

    function __construct($nombre, $apellido, $edad) {
        $this->id = rand(1,100);
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEdad() {
        return $this->edad;
    }

}

?>