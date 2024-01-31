<?php

include_once ("clases/model.php");

class Gamas extends Model
{
    public function __construct()
    {
        parent::__construct("gamasproductos");
    }

    public function getGamas()
    {
        $gamas = $this->db->dataQuery('SELECT Gama, DescripcionTexto FROM gamasproductos ORDER BY DescripcionTexto');
        $this->db->closeConnection();
        return $gamas;
    }
}

?>