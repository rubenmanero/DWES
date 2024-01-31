<?php

// Controlador. Debería tener un método por cada posible valor de la variable "action".
include "view.php";
include "clients.php";

class ClientsController
{
    public function showAll()
    {
        $data['clients'] = Clients::getAll();
        View::show("showAllClients", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>
