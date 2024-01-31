<?php
//Añadir esta clase en controllers.php
// Controlador. Debería tener un método por cada posible valor de la variable "action".

// Añadimos las clases Clients y Employees, necesarias para los métodos a implementar
include_once ("clases/view.php");
include_once ("clases/clients.php");
include_once ("clases/employees.php");

class UpdateController
{
    public function showPhonesForm()
    {
        $clients = new Clients();
        $data['clients'] = $clients->getAll();  // Utilizamos el método genérico de la clase Model para coger todos los datos de la tabla clientes
        View::show("showPhonesForm", $data);    // Cargamos la vista pasándole el array de datos
    }   // Abre la vista showPhonesForm.php

    // Este método recibe el array $_REQUEST que contiene el código del cliente seleccionado por el usuario
    public function showClientData($data)
    {
        $id = $data['codigocliente'];   // Almacenamos en la variable $id el código del cliente
        $client = new Clients();
        $data['client'] = $client->getClient($id);  // Abre la clase Clients y sigue leyendo en la línea 58
        // En el elemento $data['client'] se almacena un array bidimensional con una fila de datos del cliente

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";     //Puedes descomentar estas líneas para visualizar el array $data

        $employees = new Employees();
        $data['employees'] = $employees->getSalesEmployees();   // Tomamos también los datos CodigoEmpleado, Nombre, Apellido1 y Apellido 2 de los empleados que son Representantes de Ventas

        View::show("showUpdateForm", $data);    // Cargamos la vista showUpdateForm.php con el formulario de modificación de datos del cliente
    }   // Abre la vista showUpdateForm.php

    // Este método recibe el array $_REQUEST desde el formulario de modificación de datos de cliente
    public function updateClient($data)
    {
        extract($data);     // Extraemos todos los elementos del array $_REQUEST convirtiéndolos a variables con el mismo nombre que los índices correspondientes

        // echo "<pre>";
        // print_r($data);
        // echo "<pre>";    // Puedes descomentar estas líneas si quieres visualizar el array $data

        $clients = new Clients();
        // Ejecutamos el método updateClient() de la clase Clients y almacenamos el resultado en el elemento $data['update']
        $data['update'] = $clients->updateClient($CodigoCliente, $NombreCliente, $NombreContacto, $ApellidoContacto, $Telefono, $Fax, $LineaDireccion1, $LineaDireccion2, $Ciudad, $Region, $Pais, $CodigoPostal, $CodigoEmpleadoRepVentas, $LimiteCredito);
        // Abre la clase Clients y sigue leyendo en la línea 66

        View::show("showUpdateResult", $data);  // Se invoca al método show() de la clase View y cargamos la vista showUpdateResult, pasándole el mensaje de éxito o error en la modificación
    }
    // Abre la vista showUpdateResult.php


    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>