<?php

use function PHPUnit\Framework\isEmpty;

    include ("layouts/header.php");

    $fecha=date("d-m-Y");
    echo "<h1>Productos de la gama {$_REQUEST['gama']} - Fecha: $fecha </h1><br>";

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

        foreach($query as $row) {
            echo "<tr>";
            echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
            echo "</tr>";
        }
        print ("</table>");
    }
    echo "<br><p><a href='index.php'>Realizar nueva consulta</a></p>";

    include ("layouts/footer.php");
?>