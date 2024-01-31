<?php

// Controlador. Debería tener un método por cada posible valor de la variable "action".
include_once ("clases/view.php");
include_once ("clases/gamas.php");

class GamasController
{
    public function showGamas()
    {
        $gamas = new Gamas();
        $data['gamas'] = $gamas->getGamas();
        View::show("showProductsForm", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>