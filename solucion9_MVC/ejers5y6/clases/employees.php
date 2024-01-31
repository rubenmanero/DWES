<?php

include_once ("model.php");

// Esta clase es igual que la clase Model pero para la tabla 'empleados'
class Employees extends Model
{
    public function __construct()
    {
        parent::__construct("empleados");
    }

    // Aquí se añadirían todos los métodos específicos para consultas sobre la tabla 'empleados'

    // Este método devuelve un array bidimensional con todos los regitros de empleados Representantes de Ventas, cogiendo únicamento su código de empleado, nombre y apellidos
    public function getSalesEmployees() {
        $salesEmployees = $this->db->dataQuery('SELECT CodigoEmpleado, Nombre, Apellido1, Apellido2 FROM empleados WHERE Puesto = "Representante Ventas"');
        $this->db->closeConnection();
        return $salesEmployees;
    }
}
// Vuelve a insertController.php (línea 15)
?>