<?php
class Persona {
    private $nombre;
    private $apellidos;
    private $sexo;
    protected $fehaNacimiento;

    public function  __construct($nom,$ape,$sexo,$fechaNaci) {
        $this->nombre=$nom;
        $this->apellidos=$ape;
        $this->sexo=$sexo;
        $this->fechaNacimiento=$fechaNaci;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre( $nombre ) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos( $apellidos ) {
        $this->apellidos = $apellidos;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo( $sexo ) {
        $this->sexo = $sexo;
    }
    public function getFechaNacimiento() {
        return $this->fehaNacimiento;
    }

    public function setFechaNacimiento( $fecha ) {
        $this->fechaNacimiento = $fecha;
    }

    public function getNombreCompleto()
    {
        return "$this->nombre $this->apellidos";
    }

    public function calculaEdad()
    {
        $fechaNacimiento = new DateTime($this->fechaNacimiento);
        $fechaActual = new DateTime();
        $diferencia = $fechaNacimiento->diff($fechaActual);
        $edad = $diferencia->y;
        return $edad;
    }
}
?>

