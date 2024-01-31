<?php

include "controladores/controllers.php";


if (!isset($_REQUEST['action'])) {
    $action = "showGamas";
} else {
    $action = $_REQUEST['action'];
}

if (!isset($_REQUEST['controller'])) {
    $controllerClassName = "GamasController";
} else {
    $controllerClassName = $_REQUEST['controller'];
}

$controller = new $controllerClassName();

if(!isset($_REQUEST['gama'])) {
    $controller->{$action}();
} else {
    $controller->{$action}($_REQUEST['gama']);
}

?>