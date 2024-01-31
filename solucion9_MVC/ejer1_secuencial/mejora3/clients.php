<?php
include "db.php";

    class Clients {
        public static function getAll()
        {
            $db = new Db();

            // Conectamos con la BD a través de nuestra capa de abstracción
            $db->createConnection('localhost', 'jardinero', 'jardinero', 'jardineria');

            // Lanzamos la consulta a través de nuestra capa de abstracción.
            $clients=$db->dataQuery('SELECT CodigoCliente, NombreCliente, NombreContacto from Clientes');

            $db->closeConnection();

            return $clients;
        }
    }
?>