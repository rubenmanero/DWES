<?php

include_once "model.php";

class Products extends Model
{
    public function __construct()
    {
        parent::__construct("productos");
    }

    // Esta clase implementa un método para devolver en un array los productos de una determinada gama recibida por parámetro
    public function getProductsByRange($range)
    {
        $products = $this->db->dataQuery("SELECT CodigoProducto, Nombre, CantidadEnStock FROM productos WHERE Gama='".$range."' ORDER BY Nombre");
        $this->db->closeConnection();
        return $products;
    }
    // Vuelve a productsController.php (línea 16)
}

?>