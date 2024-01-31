<?php
// Esta vista ha recibido un elemento $data['clients'] que contiene el array bidimensional con todos los datos de la consulta realizada para el ejercicio 1 de BBDD

	include ("layouts/header.php");

	// Incluimos un enlace de vuelta al menú principal (recargando la página se pierden los datos del array $_REQUEST)
	echo "<a href='index.php'>MENU PRINCIPAL</a><br>";

	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>CODIGO CLIENTE</th><th>NOMBRE CLIENTE</th><th>NOMBRE CONTACTO</th>";
	echo "</tr>";
	$clientes = $data["clients"];		// Almacenamos el array bidimensional en una variable
	foreach($clientes as $cliente) {	// Cada elemento $cliente del array $clientes es un array unidimensional (una fila)
		echo "<tr>";
		echo "<td>$cliente[0]</td><td>$cliente[1]</td><td>$cliente[2]</td>";	// Mostramos los 3 datos de cada fila
		echo "</tr>";
	}
	echo "</table>";

    include ("layouts/footer.php");

// Vuelve a index.php, a la línea de código 17
?>