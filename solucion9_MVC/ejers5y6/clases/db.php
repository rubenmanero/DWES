<?php
// Clase que implementa los métodos necesarios para interactuar con cualquier base de datos

class Db {
    protected $db; // Aquí guardaremos la conexión con la base de datos

    /**
     * Este método abre la conexión con la base de datos
     * @param $server: URL del servidor de la base de datos
     * @param $username: Nombre de usuario en ese servidor
     * @param $pass: Contraseña
     * @param $dbname: Nombre de la base de datos
     * @return 0 si la conexión se realiza con normalidad y -1 en caso de error
     */
    function createConnection($server, $username, $pass, $dbname) {     // Este es un método constructor definido por nosotros para implementar
                                                                        // posibles evaluaciones posteriores de la conexión a nivel de código
        // Definimos el atributo $db como un objeto mysqli con los valores recibidos por parámetro
        $this->db = new mysqli($server, $username, $pass, $dbname);

        if ($this->db->connect_errno) return -1;
        else return 0;
    }

    /**
     * Este método cierra la conexión con la base de datos si hay establecida una conexión previamente
     */
    function closeConnection() {
        if ($this->db) $this->db->close();
    }

    /**
     * Este método lanza una consulta (SELECT) contra la base de datos.
     * ¡Ojo! Este método solo funcionará con sentencias SELECT.
     * @param $sql El código de la consulta que se quiere lanzar
     * @return Un array bidimensional con los resultados de la consulta (estará vacío si la consulta no devolvió nada)
     */
    function dataQuery($sql) {
        $res = $this->db->query($sql);
        $resArray = array();
        if ($res) {
            $resArray = $res->fetch_all();  //Este método almacena todas las filas de la consulta en un array bidimensional

            // echo "<pre>". print_r($resArray) ."</pre>";  // Puedes descomentar esta línea si quieres ver en algún momento cómo es el array
        }
        return $resArray;
    }

    /**
     * Este método lanza una sentencia de manipulación de datos contra la base de datos.
     * ¡Ojo! Este método solo funcionará con sentencias INSERT, UPDATE, DELETE y similares.
     * @param $sql El código de la consulta que se quiere lanzar
     * @return El número de filas insertadas, modificadas o borradas por la sentencia SQL (0 si no produjo ningún efecto).
     */
    function dataManipulation($sql) {
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
}
// Vuelve a la clase model.php y sigue leyendo (línea 5)
?>