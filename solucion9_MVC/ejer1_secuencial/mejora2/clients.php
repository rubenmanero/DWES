<?php
    class Clients {
        public static function getAll()
        {
            $db = new mysqli('localhost', 'jardinero', 'jardinero', 'jardineria');
            $res=$db->query('SELECT CodigoCliente, NombreCliente, NombreContacto FROM Clientes');

            $clients = array();
            while ($row = $res->fetch_array())  {
                $clients[] = $row;
            }
            $db->close();
            return $clients;
        }
    }
?>