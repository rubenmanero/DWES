<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Hoja 9. Ejercicio 1</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>CLASE EMPLEADO</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    require_once("Empleado.php");

    $emp1 = new Empleado ("Sebastián", "Arriaga López", "H", "22-10-1994", "Administrativo", 1200);
    echo $emp1->getTributacion();
    echo "<br>";

    $emp2 = new Empleado ("Amalia", "Gutiérrez Blanco", "M", "15-8-1998", "Gerente", 2400);
    echo $emp2->getTributacion();
?>
        </main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>