<?php
// Esta clase necesita implementar métodos de la clase Db para realizar consultas sobre la base de datos. Abre db.php...
include_once "db.php";

// Esta es una clase genérica de acceso a los datos de cualquier tabla que se le pase como parámetro en su método constructor
class Model
{
    // Definimos sus atributos como 'protected' ya que vamos a crear clases hija de esta clase que queremos que hereden sus propiedades y métodos
    protected $table;  // Aquí guardaremos el nombre de la tabla a la que estamos accediendo
    protected $db;     // Y aquí la capa de abstracción de datos, es decir, el objeto mysqli definido en la clase Db como atributo

    // Para instanciar un objeto Model necesitamos pasarle el nombre de la tabla sobra la que queremos que realice las consultas
    public function __construct($tableName)
    {
        $this->table = $tableName;
        $this->db = new Db();   // Instanciamos el objeto Db para poder ejecutar el método constructor que hemos personalizado
        $this->db->createConnection('localhost', 'root', '', 'jardineria');
    }

    // Esta función recaba todos los datos de la tabla, es decir, todos los valores de los campos en todos los registros
    public function getAll()
    {
        // Se hace uso del método dataQuery() de la clase Db, que devuelve un array
        $list = $this->db->dataQuery("SELECT * FROM " . $this->table);
        return $list;   // Devuelve un array bidimensional con todas las filas de la tabla
    }

    // Este método recaba todos los datos de un registro cuya ID se le pase por parámetro. No sirve si el campo definido como PRIMARY KEY no se llama 'id', habría cambiarlo en la sentencia SQL o definir un método aparte para esa tabla
    public function get($id)
    {
        $record = $this->db->dataQuery("SELECT * FROM " . $this->table . " WHERE id = " . $id);
        return $record; // Devuelve un array bidimensional con los datos de la fila correspondiente a ese registro, la fila será el elemento $record[0]
    }

    // Este es un método genérico que borra un registro cuya ID se le pase por parámetro
    public function delete($id)
    {
        $result = $this->db->dataManipulation("DELETE FROM " . $this->table . " WHERE id = " . $id);
        return $result; // Devuelve el número de filas afectadas por la sentencia SQL
    }


    // Este es un método genérico que devuelve la última ID almacenada en la tabla
    public function lastRegister()
    {
        $query = $this->db->dataQuery("SELECT MAX(id) FROM " . $this->table);   // Se crea una array bidimensional con un elemento
        return $query[0][0]; // Hay que tomar el valor del único elemento que se ha creado para la única fila consultada
    }

    // Este es un método genérico para introducir un nuevo registro en la tabla pasándole los datos como parámetro en un array unidimensional que los contenga. Los datos deben estar ordenados igual que los campos de la tabla (no hay que pasarle ID)
    public function insert($data)
    {
        $lastRegister = $this->lastRegister();  // Se calcula la última ID de la tabla
        $id = $lastRegister[0] + 1;             // Se genera la siguiente ID para el nuevo registro

        $sql = "INSERT INTO ". $this->table . " VALUES($id, ";  // Conformamos el comienzo de la sentencia SQL con ID como primer dato
        for($i=0;$i<count($data)-1;$i++)        // Se recorre el array $data hasta su penúltimo elemento separándolos con comas
        {
            $sql .= $data[$i].", ";             // Se van aladiendo los valores a la sentencia SQL
        }
        $sql .= $data[$i]. ")";                 // Se añade el último dato sin coma y cerrando el paréntesis

        // Se hace uso del método dataManipulation() de la clase Db, que devuelve el número de filas afectadas
        $result = $this->db->dataManipulation($sql);

        if($result>0) {     // Si algún registro ha sido modificado, mostramos la sentencia SQL aplicada
            echo "<p>Nuevo registro: $sql</p>";
        } else {            // En caso de error mostramos el siguiente texto (estas líneas se pueden dejar comentadas posteriormente)
            echo "<p>Fallo al insertar registro.</p>";
        }
    }

    // Ahora vuelve a la clase clients.php (línea 3)
}
