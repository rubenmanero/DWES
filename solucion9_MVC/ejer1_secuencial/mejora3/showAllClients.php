<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Hoja 6. Ejercicio 1</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="estilosimple.css">
</head>
<body>
    <header>
        <h1>CONSULTA DE CLIENTES</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>CODIGO CLIENTE</th><th>NOMBRE CLIENTE</th><th>NOMBRE CONTACTO</th>";
	echo "</tr>";
	foreach($clients as $client)
	{
		echo "<tr>";
		echo "<td>$client[0]</td><td>$client[1]</td><td>$client[2]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>