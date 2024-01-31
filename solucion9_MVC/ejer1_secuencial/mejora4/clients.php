<?php

include "db.php";

class Clients
{
    public static function getAll()
    {
        $db = new Db();
        $db->createConnection('localhost', 'jardinero', 'jardinero', 'jardineria');
        $clients = $db->dataQuery('SELECT CodigoCliente, NombreCliente, NombreContacto from Clientes');
        $db->closeConnection();
        return $clients;
    }
}
