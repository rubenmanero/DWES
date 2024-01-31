<?php

class Prueba
{
    private $nombre;
    private $apellidos;
    protected $edad;
    public $profesion;

    public function __construct($nombre, $apellidos, $edad, $profesion)
    {
        $this->nombre    = $nombre;
        $this->apellidos = $apellidos;
        $this->edad      = $edad;
        $this->profesion = $profesion;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

    public function setProfesion($profesion): void
    {
        $this->profesion = $profesion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getProfesion()
    {
        return $this->profesion;
    }
}
?>
