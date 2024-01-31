<?php
    include ("layouts/header.php");

	  echo "<a href='index.php'>MENU PRINCIPAL</a><br>";

	  echo "<h1>Consulta de productos por gama</h1><br>";

    $query = $data["gamas"];  // Se recoge el array de datos obtenido por GamasController a través del método getGamas() de la clase Gamas

    echo "<form action='index.php' method='GET'>";  // El formulario devuelve los datos a index.php
    echo "<p>Elige una de las gamas de productos disponible &nbsp;";
    echo "<select name='gama'>";

    foreach($query as $row) { // Se recorre el array bidimensional para mostrarlo en las opciones del input tipo select
      echo "<option value='$row[0]'>". $row[1]."</option>";
    }

    echo "</select></p><br>";

    echo "<input type='hidden' name='controller' value='ProductsController'>";  // Incluimos el controlador que queremos que muestre los datos asociados a la elección del usuario
    echo "<input type='hidden' name='action' value='showProductsByRange'>";     // Incluimos la acción que queremos que realice el controlador

    echo "<p><input type='submit' name='enviar' value='Enviar consulta'></p>";
    echo "</form>";

    include ("layouts/footer.php");

    // Vuelve a index.php (línea 22)
?>
