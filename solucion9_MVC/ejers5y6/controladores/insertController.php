<?php
// Añadir esta clase en controllers.php
// Controlador. Debería tener un método por cada posible valor de la variable "action".

// Para el ejercicio 5 es necesario hacer consultas en las tablas 'clientes' y 'empleados'
include_once ("clases/view.php");
include_once ("clases/clients.php");
include_once ("clases/employees.php");

class InsertController
{
    // Este método recoge los datos de los empleados Representantes de Ventas y muestra un formulario de inserción de Nuevo Cliente
    public function showClientsForm()
    {
        $employees = new Employees();   // Abre la clase employees.php
        $data['employees'] = $employees->getSalesEmployees();  //Almacenamos los datos obtenidos de la tabla 'empleados'
        View::show("showInsertClientForm", $data);  //Muestra la vista con el formulario (abre showInsertClientForm.php en /vistas)
    }

    // Este método recibe el array $_REQUEST con todos los datos del formulario de inserción de cliente
    public function insertionResult($data)
    {
        extract($data); // Extrayendo todos los datos del array $_REQUEST recibido, convertimos todos sus índices a variables con el mismo nombre
        $clients = new Clients();
        $data['insert'] = $clients->insertClient($NombreCliente, $NombreContacto, $ApellidoContacto, $Telefono, $Fax, $LineaDireccion1, $LineaDireccion2, $Ciudad, $Region, $Pais, $CodigoPostal, $CodigoEmpleadoRepVentas, $LimiteCredito);    // Abre la clase Clients y sigue leyendo en la línea 23
        View::show("showInsertionResult", $data);   // En $data['insert'] se ha almacenado la string devuelta por el método insertClient()
        // Abre la vista showInsertionResult.php
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>