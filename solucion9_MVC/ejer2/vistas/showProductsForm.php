<?php
    include ("layouts/header.php");

	echo "<h1>Consulta de productos por gama</h1><br>";

    $query = $data["gamas"];

    echo "<form action='index.php' method='GET'>";
    echo "<p>Elige una de las gamas de productos disponible &nbsp;";
    echo "<select name='gama'>";

    foreach($query as $row) {
      echo "<option value='$row[0]'>". $row[1]."</option>";
    }

    echo "</select></p><br>";

    echo "<input type='hidden' name='controller' value='ProductsController'>";
    echo "<input type='hidden' name='action' value='showProductsByRange'>";

    echo "<p><input type='submit' name='enviar' value='Enviar consulta'></p>";
    echo "</form>";

    include ("layouts/footer.php");
?>
