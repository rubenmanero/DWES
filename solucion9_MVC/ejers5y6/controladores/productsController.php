<?php
//Añadir esta clase en controllers.php
// Controlador. Debería tener un método por cada posible valor de la variable "action".

// Incluimos la clase Products
include_once ("clases/view.php");
include_once ("clases/products.php");

class ProductsController
{
    // Desde el caso 'default' del switch en index.php recibimos la acción a realizar (este método) con todo el array $_REQUEST del formulario anterior
    public function showProductsByRange($request)      // $request es un parámetro que recibe el array $_REQUEST
    {
        $gama = $request['gama'];   // Tomamos la gama seleccionada por el usuario del array $request
        $products = new Products();
        $data['products'] = $products->getProductsByRange($gama);   // Abre la clase products.php
        View::show("showProductsByRange", $data);   // Cargamos la vista showProductsByRange.php (abre el archivo)
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>