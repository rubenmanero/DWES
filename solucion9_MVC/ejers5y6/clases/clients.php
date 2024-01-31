<?php
// Esta clase es hija de la clase Model y hereda todas sus propiedades y métodos. Abre model.php...
include_once ("model.php");

class Clients extends Model
{
    public function __construct()   // El método constructor es el mismo que en la clase Model pero con el nombre de la tabla 'clientes'
    {
        parent::__construct("clientes");
    }

    // Este es el método implementado en la clase ClientsController, que toma solo los datos necesarios para el ejercicio 1 de BBDD
    // Podemos utilizar también el método getAll() de la clase Model y que ha heredado esta clase Clients, solo que el array será distinto
    public function getAllClients()
    {
        $clients = $this->db->dataQuery('SELECT CodigoCliente, NombreCliente, NombreContacto FROM clientes');
        $this->db->closeConnection();
        return $clients;    // Devuelve un array bidimensional con los datos seleccionados en la consulta para todos los registros de la tabla
    }
    // Vuelve a la clase clientsController.php y sigue leyendo en la línea 9


    // Antes de ejecutar el método insertClient() necesitamos implementar un método que calcule el último código de cliente registrado en la tabla
    public function lastRegisteredClient()
    {
        $query = $this->db->dataQuery('SELECT MAX(CodigoCliente) FROM clientes');   // Selecciona el último código de cliente
        foreach($query as $row){
            $lastClient=$row;   // También podríamos omitir el bucle con $lastClient = $query[0][0]
        }
        return $lastClient;
    }

    // Método que recibe todos los datos de un nuevo cliente salvo el código. Éste se calcula con el método lastRegisteredClient()
    public function insertClient($NombreCliente, $NombreContacto, $ApellidoContacto, $Telefono, $Fax, $LineaDireccion1, $LineaDireccion2, $Ciudad, $Region, $Pais, $CodigoPostal, $CodigoEmpleadoRepVentas, $LimiteCredito)
    {
        $lastClient = $this->lastRegisteredClient();

        $CodigoCliente = $lastClient[0]+1;  // El nuevo cliente tendrá que tener un código con un número más que el último registrado

        $sql = "'$NombreCliente','$NombreContacto', '$ApellidoContacto', '$Telefono', '$Fax', '$LineaDireccion1', '$LineaDireccion2', '$Ciudad', '$Region', '$Pais', '$CodigoPostal', $CodigoEmpleadoRepVentas, $LimiteCredito";

        echo $sql;  // Al invocar este método se muestra por pantalla todos los datos recibidos por parámetro (se puede comentar esta línea si hace falta)

        $insercion = "INSERT INTO clientes VALUES($CodigoCliente, $sql)"; // La sentenciaSQL debe incluir el nuevo código de cliente y los datos recibidos por parámetro

        $result = $this->db->dataManipulation($insercion);  // Ejecutamos el método dataManipulation() de la clase Db para sentencias tipo INSERT, UPDATE, DELETE,...
        $this->db->closeConnection();

        // Devuelve un string con los datos del nuevo cliente si la inserción se ha realizado con éxito o un mensaje de error si no se ha podido ejecutar
        if($result>0) {
            return "<p>Nuevo registro con código $CodigoCliente:<br><br> $sql</p>";
        } else {
            return "<p>Fallo al insertar registro.</p>";
        }
    }   // Vuelve a insertController.php (línea 25)


    // Este método realiza una consulta a la BD que toma todos los datos de un cliente según la ID que se le pase por parámetro
    public function getClient($id)
    {
        $record = $this->db->dataQuery("SELECT * FROM " . $this->table . " WHERE CodigoCliente = " . $id);
        return $record;     // Devuelve un array bidimensional con una única fila con los datos del cliente
    }   // Sigue leyendo en UpdateController (línea 25)


    // Este método recibe por parámetro todos los datos de un cliente determinado y modifica los existentes sustituyéndolos por éstos
    public function updateClient($CodigoCliente,$NombreCliente,$NombreContacto, $ApellidoContacto, $Telefono, $Fax, $LineaDireccion1, $LineaDireccion2, $Ciudad, $Region, $Pais, $CodigoPostal, $CodigoEmpleadoRepVentas, $LimiteCredito)
    {
        // Creamos la sentencia SQL que modifica los datos del cliente asociado a $CodigoCliente
        $sql = "UPDATE clientes SET nombrecliente='$NombreCliente', nombrecontacto='$NombreContacto', apellidocontacto='$ApellidoContacto', telefono='$Telefono', fax='$Fax', lineadireccion1='$LineaDireccion1', lineadireccion2='$LineaDireccion2', ciudad='$Ciudad', region='$Region', pais='$Pais', codigopostal='$CodigoPostal', codigoempleadorepventas='$CodigoEmpleadoRepVentas', limitecredito='$LimiteCredito' WHERE codigocliente = '$CodigoCliente'";

        // Ejecutamos el método dataManipulation() de la clase Db para sentencias tipo UPDATE, INSERT, DELETE,...
        $result = $this->db->dataManipulation($sql);    // Este método devuelve el número de filas afectadas por la sentencia SQL
        $this->db->closeConnection();

        // Si la modificación ha tenido éxito se devuelve una string con la sentencia empleada para poder visualizar los datos que se han introducido, si no se devuelve un mensaje de error
        if($result>0) {
            return "<p>Modificación del cliente con código $CodigoCliente:<br><br> $sql</p>";
        } else {
            return "<p>Fallo al modificar registro.</p>";
        }
    }
}
// Vuelve a updateController.php (línea 51)
?>
