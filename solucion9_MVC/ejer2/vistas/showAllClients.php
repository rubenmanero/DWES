<?php

include ("layouts/header.php");

	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>CODIGO CLIENTE</th><th>NOMBRE CLIENTE</th><th>NOMBRE CONTACTO</th>";
	echo "</tr>";
	$clientes = $data["clients"];
	foreach($clientes as $cliente) {
		echo "<tr>";
		echo "<td>$cliente[0]</td><td>$cliente[1]</td><td>$cliente[2]</td>";
		echo "</tr>";
	}
	echo "</table>";

    include ("layouts/footer.php");
?>