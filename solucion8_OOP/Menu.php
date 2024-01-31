<?php
class Menu {
    private $dia;
    private $fecha;
    private $primerosplatos = array();
    private $segundosplatos = array();
    private $postres = array();

    public function __construct($dia,$fecha) {
        $this->dia = $dia;
        $this->fecha = $fecha;
    }

    public function getDia() {
        return $this->dia;
    }
    public function setDia($dia) {
        $this->dia = $dia;
    }

    public function getFecha() {
        return $this->fecha;
    }
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getPrimerosPlatos() {
        return $this->primerosplatos;
    }
    public function setPrimerPlato($plato) {
        $this->primerosplatos[] = $plato;
    }

    public function getSegundosPlatos() {
        return $this->segundosplatos;
    }
    public function setSegundoPlato($plato) {
        $this->segundosplatos[] = $plato;
    }

    public function getPostres() {
        return $this->postres;
    }
    public function setPostre($plato) {
        $this->postres[] = $plato;
    }

    public function getMenu() {     //Método de comprobación de datos almacenados en el objeto
        echo "{$this->dia}, {$this->fecha}<br>";
        echo "<b>Primeros platos</b><br>";
        $primeros = $this->getPrimerosPlatos();
        foreach($primeros as $plato) {
            echo "$plato <br>";
        }
        echo "<br><b>Segundos platos</b><br>";
        $segundos = $this->getSegundosPlatos();
        foreach($segundos as $plato) {
            echo "$plato <br>";
        }
        echo "<br><b>Postres</b><br>";
        $postres = $this->getPostres();
        foreach($postres as $plato) {
            echo "$plato <br>";
        }
    }
}
?>