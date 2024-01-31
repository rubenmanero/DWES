<?php
class Racional {
    private $num;
    private $den;

    public function __construct($num=1, $den=1) {
        //opciones new Racional () => 1/1
        //opciones new Racional (5) => 5/1
        //opciones new Racional ("5/2") => 5/2
        //opciones new Racional (5,2) => 5/2
        if (is_string($num)) {
            $numero = explode("/",$num);
            $num = $numero[0];
            $den = $numero[1];
        }
        $this->num = $num;
        $this->den = $den;
    }

    //Creamos los getters y setters para sus propiedades
    public function setNum( $num): void {$this->num = $num;}

	public function setDen( $den): void {$this->den = $den;}

	public function getNum() {return $this->num;}

	public function getDen() {return $this->den;}

    /* Método para visualizar el objeto como cadena de caracteres */
    public function __toString() {
        return ($this->num."/".$this->den);
    }

    //A continuación las operaciones racionales
    public function sumarRacional($rac) {
        $numerador = $this->num * $rac->getDen() + $rac->getNum() * $this->den;
        $denominador = $this->den * $rac->getDen();

        return new Racional($numerador, $denominador);
    }

    public function restarRacional($rac) {
        $numerador = $this->num * $rac->getDen() - $rac->getNum() * $this->den;
        $denominador = $this->den * $rac->getDen();

        return new Racional($numerador, $denominador);
    }

    public function multiplicarRacional($rac) {
        $numerador = $this->num * $rac->getNum();
        $denominador = $this->den * $rac->getDen();

        return new Racional($numerador, $denominador);
    }

    public function dividirRacional($rac) {
        $numerador = $this->num * $rac->getDen();
        $denominador = $this->den * $rac->getNum();

        return new Racional($numerador, $denominador);
    }

    /* Operación para simplificar un número racional */
    public function simplificarRacional() {
        $numerador = $this->num;
        $denominador = $this->den;

        for($i=2;$i<=min(abs($numerador),$denominador);$i++) {
            if($numerador%$i==0 && $denominador%$i==0) {
                $numerador = $numerador/$i;
                $denominador = $denominador/$i;
                $i--;
            }
        }
        return new Racional($numerador, $denominador);
    }
}
?>