<?php
// En esta vista se muestra el listado de productos de una gama, un enlace de vuelta al menú inicial y un botón para volver al formulario de elección de gama

    include ("layouts/header.php");

	echo "<a href='index.php'>MENU PRINCIPAL</a><br>";

    $fecha=date("d-m-Y");
    echo "<h1>Productos de la gama {$_REQUEST['gama']} - Fecha: $fecha </h1><br>";  // Como hemos recibido el array $_REQUEST en index.php y el controlador se ha ejecutado desde ahí, podemos hacer uso de los datos almacenados en él

    // También recogemos los datos del array $data pasado por el controlador a la vista
    $query = $data["products"];

    if ($data["products"]==null) {
    	echo "<h1>Actualmente no existe ningún producto dado de alta en esta gama</h1>";
    } else {
        print ("<table>");
        print ("<tr>");
        print ("<th>Código producto</th>");
        print ("<th>Nombre</th>");
        print ("<th>CantidadEnStock</th>");
        print ("</tr>");

        foreach($query as $row) {   // Recorremos el array $query de la consulta realizada por el controlador
            echo "<tr>";
            echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
            echo "</tr>";
        }
        print ("</table>");
    }

    // Si el usuario pulsa el botón para una nueva consulta, incluimos dos inputs ocultos con el controlador y la acción que llevan a la vista del formulario. La acción no es necesario definirla porque se le asigna su valor en el caso corrspondiente del switch, podríamos omitir el campo oculto, pero de cara a optimizar el código en el futuro y suprimir el switch de index.php lo vamos a dejar
    echo "<br><form action='index.php' method='get'>
        <input type='submit' value='Realizar nueva consulta' class='boton'>
        <input type='hidden' name='controller' value='Consultar productos'>
        <input type='hidden' name='action' value='true'>
    </form>";

    include ("layouts/footer.php");
// Vuelve a index.php (línea 30)
?>