<?php

// Controlador. Debería tener un método por cada posible valor de la variable "action".
include_once ("clases/view.php");
include_once ("clases/clients.php");

class ClientsController
{
    public function showClients()
    {
        $clients = new Clients();
        $data['clients'] = $clients->getAllClients();
        View::show("showAllClients", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>
