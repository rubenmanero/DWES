<?php
// Añadir esta clase en controllers.php
// Controlador. Debería tener un método por cada posible valor de la variable "action".

// Incluimos las clases que vamos a necesitar para este controlador
include_once ("clases/view.php");   //Ya hemos visto la clase View, se encarga de cargar las vistas en el navegador
include_once ("clases/clients.php");    //La clase Clients se encargará de realizar todas las consultas sobre la tabla 'clientes'. Ábrela...


// Esta clase, de momento, solo implementa un método para obtener los datos del ejercicio 1 de BBDD y mostrarlos por pantalla
class ClientsController
{
    public function showClients()
    {
        $clients = new Clients();                       // Se crea un nuevo objeto de la clase Clients
        $data['clients'] = $clients->getAllClients();   // Se ejecuta el método getAllClients que realiza la consulta y se almacenan los datos en un elemento del array $data
        View::show("showAllClients", $data);            // Se le pasa al método show() de la clase View el nombre de la vista que se desea cargar y el array completo de datos
    }
    // Abre ahora showAllClients.php en el directorio /vistas


    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>
