<?php
    include ("layouts/header.php");

	// Enlace al menú principal
	echo "<a href='index.php'>MENU PRINCIPAL</a><br>";

	echo "<h1>Consulta de los datos de un cliente</h1><br>";

	// Recogemos en la variable $query el array con todos los datos de la tabla clientes
	$query = $data["clients"];
	echo "<form  action='#' method='get'>";
	echo "Selecciona el telefono del cliente: &nbsp;";
	echo "<select name='codigocliente'>";

	// Recorremos el array por filas y mostramos el teléfono y el nombre del cliente en el menú desplegable
	foreach($query as $row) {
		echo"<option value=$row[0]>".$row[4]."--".$row[1]."</option>";	// Guardamos en $_REQUEST['codigocliente'] el código de cliente de la elección del usuario
	}

	echo"</select><br><br>";
	echo "<input type='submit' value='Enviar consulta' name='enviar'>";

	// Cuando el usuario pulse el botón 'Enviar consulta', enviamos mediante campos ocultos el controlador y la acción para mostrar todos los datos del cliente en un formulario donde el usuario los pueda modificar
    echo '<input type="hidden" name="controller" value="updateController">';
    echo '<input type="hidden" name="action" value="showClientData">';
	echo '</form>';

    include ("layouts/footer.php");
	// Vuelve a index.php (línea 45)
?>