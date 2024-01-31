<?php
// Añadimos todos los controladores a la página principal del sitio (mira el archivo controllers.php dentro del directorio /controladores)
include "controladores/controllers.php";

if (!isset($_REQUEST['controller'])) {
    $controllerClassName = "MenuController";    // Al iniciar por primera vez, ejecutamos (al final de este código) el controlador del menú principal del sitio
    $action = "showMenu";                       // Utilizamos el método showMenu() de dicho controlador (ve a menuController.php)
} else {
    // Evaluamos los posibles casos de formularios con más de un botón
    switch($_REQUEST['controller']) {
        case "Consultar clientes":      // Desde la vista menu.php, si el usuario selecciona este botón, se accede al ejercicio 1 de BBDD
            $controllerClassName = "ClientsController";     // mediante el controlador clientsController.php
            $action = "showClients";                        // a través de su método showClients()
            break;      // Abre el controlador clientsController.php...


        case "Consultar productos":     // Desde la vista menu.php, si el usuario selecciona este botón, se accede al ejercicio 2 de BBDD
            $controllerClassName = "GamasController";       // mediante el controlador gamasController.php
            $action = "showGamas";                          // a través de su método showGamas()
            break;      // Abre el controlador gamasController.php

            // Al volver del formulario del ejercicio 2 hemos definido un controlador no contemplado en los casos del switch,
            // se ejecutará el caso 'default' con los datos de los inputs tipo hidden del formulario.
            // Este código se podría haber diseñado de otra manera, sin tener que evaluar los textos de los botones
            // en formularios con más de un botón pero por ahora es funcional.

            // Abre el controlador productsController.php en el directorio /controladores


        case "Insertar clientes":       // Desde la vista menu.php, si el usuario selecciona este botón, se accede al ejercicio 5 de BBDD
            $controllerClassName = "InsertController";      // mediante el controlador insertController.php
            $action = "showClientsForm";                    // a través de su método showClientsForm()
            break;      // Abre el controlador insertController.php

            // Al recargar esta página desde la vista showInsertClientForm.php desde el botón "Insertar nuevo cliente" del formulario
            // se ejecutará en el caso 'default' el controlador InsertController y la acción insertionResult($_REQUEST)
            // Abre insertController.php y sigue leyendo en la línea 19


        case "Modificar clientes":      // Desde la vista menu.php, si el usuario selecciona este botón, se accede al ejercicio 6 de BBDD
            $controllerClassName = "UpdateController";      // mediante el controlador updateController.php
            $action = "showPhonesForm";                     // a través de su método showPhonesForm()
            break;      // Abre el controlador updateController.php

            // Al volver del formulario de selección de cliente con el menú desplegable donde se muestran los teléfonos
            // se ejecuta el controlador UpdateController y la acción showClientData() mediante el caso 'default'
            // Abre updateController.php y sigue leyendo en la línea 19

        case "Selecciona otro cliente": // Este caso es exactamente igual al anterior ("Modificar clientes") pero viniendo desde showUpdateForm.php
            $controllerClassName = "UpdateController";
            $action = "showPhonesForm";
            break;

        case "Modificar cliente":       // Desde showUpdateForm.php, si el usuario decide modificar los datos de un cliente,
            $controllerClassName = "UpdateController";      // se ejecuta el controlador updateController.php
            $action = "updateClient";                       // y el método updateClient()
            break;      // Abre el controlador updateController.php y sigue leyendo en la línea 37

            // El caso default ejecuta el controlador y la acción recibidas cuando no se han evaluado valores de input tipo submit
            // Lo ideal sería conformar el código para que éstas fueran las únicas líneas que ejecutara index.php
        default:
            $controllerClassName = $_REQUEST['controller'];
            $action = $_REQUEST['action'];
    }
}

$controller = new $controllerClassName();   // Aquí instanciamos el objeto Controller seleccionado
$controller->{$action}($_REQUEST);          // E implementamos el método correspondiente a la solicitud del usuario pasándole por parámetro el array $_REQUEST con los datos de cualquier formulario inmediatamente anterior a esta llamada

// FINAL DE CÓDIGO
?>