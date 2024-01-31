<?php
// Añadir esta clase en controllers.php (esto es una nota para que no se nos olvide cargar todos los controladores)
// Controlador. Debería tener un método por cada posible valor de la variable "action".

// Incluimos la clase View que permite cargar vistas mediante el método show(). Sigue leyendo en la clase view.php del directorio /clases

include_once ("clases/view.php");   // Utilizamos include_once SIEMPRE para que no se repitan clases en los sucesivos archivos

class MenuController
{
    public function showMenu()
    {
        View::show("menu");     // Invocamos el método show() de la clase View sin necesidad de pasarle datos a través de su segundo parámetro
    }                           // Sigue leyendo en la vista menu.php del directorio /vistas

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}
?>