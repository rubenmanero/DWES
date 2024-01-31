<?php

include "db.php";

class Model
{
    protected $table;  // Aquí guardaremos el nombre de la tabla a la que estamos accediendo
    protected $db;       // Y aquí la capa de abstracción de datos
    //IGUAL HAY QUE CAMBIAR A protected $db

    public function __construct($tableName)
    {
        $this->table = $tableName;
        $this->db = new Db();
        $this->db->createConnection('localhost', 'root', '', 'jardineria');
    }

    public function getAll()
    {
        $list = $this->db->dataQuery("SELECT * FROM " . $this->table);
        return $list;
    }

    public function get($id)
    {
        $record = $this->db->dataQuery("SELECT * FROM " . $this->table . " WHERE id = " . $id);
        return $record;
    }

    public function delete($id)
    {
        $result = $this->db->dataManipulation("DELETE FROM " . $this->table . " WHERE id = " . $id);
        return $result;
    }
}
