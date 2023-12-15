<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Examen 1ª evaluación</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>EXAMEN 1ª EVALUACIÓN</h1>
    </header>
    <section>
        <nav></nav>
        <main>
            <h1 class="centrado fecha">EJERCICIO 3</h1><br>
            <h2>Geografía española</h2><br>
            <p>Esta aplicación muestra las capitales de las Comunidades Autónomas y el número total de localidades por provincia en España.</p><br>
            <form class="centrado" action="ejer3.php" method="get">
                <input type="submit" name="capitales" value="Capitales de Autonomías">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="localidades" value="Localidades por Provincia">
            </form><br>
<?php
    $conexion = mysqli_connect("localhost", "root", "", "geografia")
        or exit("Fallo al conectar con la BD.");
if(isset($_REQUEST["capitales"])) {
    print "<p>Consulta sobre la base de datos <i>\"geografia\"</i>:</p><br>
           <h3 class='centrado'>Capitales por Comunidad Autónoma</h3><br>
    ";
    $sentenciaSQL = "SELECT
            comunidades.nombre,
            localidades.nombre
        FROM
            comunidades
        JOIN
            localidades ON comunidades.id_capital = localidades.id_localidad
        ORDER BY
            comunidades.nombre;
        ";
    $consulta = mysqli_query($conexion, $sentenciaSQL)
        or exit("Fallo al realizar la consulta sobre la BD.");

    if(mysqli_num_rows($consulta) > 0) {
        print "<table>
        <tr class='azul'>
            <th class='ancho'>Comunidad Autónoma</th>
            <th class='ancho'>Capital</th>
        </tr>";
        for($i = 0; $i < mysqli_num_rows($consulta); $i++) {
            $row = mysqli_fetch_row($consulta);
            print "<tr>";
            print "<th class='ancho'>" . $row[0] . "</th>";
            print "<td class='centrado ancho'>" . $row[1] . "</td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "No se ha encontrado ningún resultado.";
    }
}
if(isset($_REQUEST["localidades"])) {
    print "<p>Consulta sobre la base de datos <i>\"geografia\"</i>:</p><br>
           <h3 class='centrado'>Número de localidades por Provincia</h3><br>
    ";
    $sentenciaSQL = "SELECT
            provincias.nombre,
            COUNT(*)
        FROM
            localidades
        JOIN
            provincias ON localidades.n_provincia = provincias.n_provincia
        GROUP BY
            provincias.n_provincia;";
    $consulta = mysqli_query($conexion, $sentenciaSQL)
        or exit("Fallo al realizar la consulta sobre la BD.");

    if(mysqli_num_rows($consulta) > 0) {
        print "<table>
        <tr class='azul'>
            <th class='ancho'>Provincia</th>
            <th class='ancho'>Nº de localidades</th>
        </tr>";
        for($i = 0; $i < mysqli_num_rows($consulta); $i++) {
            $row = mysqli_fetch_row($consulta);
            print "<tr>";
            print "<th class='ancho'>" . $row[0] . "</th>";
            print "<td class='centrado ancho'>" . $row[1] . "</td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "No se ha encontrado ningún resultado.";
    }
}
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>