<?php
require_once("Persona.php");

class Empleado extends Persona{
    private $puesto;
    private $sueldo;

    public function  __construct($nom,$ape,$sexo,$fechaNaci,$puesto,$sueldo) {
        parent::__construct($nom,$ape,$sexo,$fechaNaci);
        $this->puesto = $puesto;
        $this->sueldo = $sueldo;
    }

    public function getTributacion(){
        $string = parent::getNombreCompleto();
        if($this->sueldo<2000) { $bool = "no"; }
        else { $bool = "sí"; }
        return "$string, {$this->puesto}, $bool debe pagar impuestos.<br>";
    }
}
?>