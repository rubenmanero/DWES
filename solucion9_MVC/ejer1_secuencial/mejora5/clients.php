<?php

include "model.php";

class Clients extends Model
{
    public function __construct()
    {
        parent::__construct("clientes");
    }

    public function getAllClients()
    {
        $clients = $this->db->dataQuery('SELECT CodigoCliente, NombreCliente, NombreContacto from Clientes');
        $this->db->closeConnection();
        return $clients;
    }
}
