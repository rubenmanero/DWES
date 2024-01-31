<?php
//Añadir esta clase en controllers.php
// Controlador. Debería tener un método por cada posible valor de la variable "action".

// Incluimos las clases necesarias para implementar los métodos de este controlador
include_once ("clases/view.php");
include_once ("clases/gamas.php");      // Abre la clase gamas.php en el directorio /clases

// Este controlador recoge los datos necesarios para mostrar el input tipo select del formulario del ejercicio 2 de BBDD
class GamasController
{
    public function showGamas()
    {
        $gamas = new Gamas();
        $data['gamas'] = $gamas->getGamas();
        View::show("showProductsForm", $data);  // Muestra el formulario del ejercicio2. Abre showProductsForm.php en /vistas
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>