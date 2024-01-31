<?php

// Controlador. Debería tener un método por cada posible valor de la variable "action".
include_once ("clases/view.php");
include_once ("clases/products.php");

class ProductsController
{
    public function showProductsByRange($gama)
    {
        $products = new Products();
        $data['products'] = $products->getProductsByRange($gama);
        View::show("showProductsByRange", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>