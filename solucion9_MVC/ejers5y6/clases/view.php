<?php

// Esta clase abre las vistas almacenadas en el directorio /vistas. Es obligatorio incluir el nombre de la vista en el primer parámetro del método show(), el segundo parámetro es opcional y se pueden pasar todo tipo de valores (string, int, array,...)

class View
{
    public static function show($viewName, $data = null)
    {
        include "vistas/$viewName.php";     //Vuelve al controlador menuController.php (línea 7)
    }
}

?>
