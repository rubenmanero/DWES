<?php

include_once ("clases/model.php");

// Ésta es otra clase hija de la clase Model para la tabla 'gamasproductos'
class Gamas extends Model
{
    public function __construct()
    {
        parent::__construct("gamasproductos");
    }

    // Definimos un método que recoja los datos necesarios para el formulario del ejercicio 2 de BBDD
    public function getGamas()
    {
        $gamas = $this->db->dataQuery('SELECT Gama, DescripcionTexto FROM gamasproductos ORDER BY DescripcionTexto');
        $this->db->closeConnection();
        return $gamas;  // Devuelve un array bidimensional con los datos recogidos de la tabla 'gamasproductos'
    }
}
    // Sigue en gamasController.php (línea 8)
?>