<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejercicio 1</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
            if (isset($_REQUEST["entero"])) {
                $entero = $_REQUEST["entero"];
                if ($entero == 0) {
                    echo $entero, " es neutro.";
                } else {
                    if ($entero % 2 == 0) {
						echo $entero, " es par.";
                    } else {
                        echo $entero, " es impar.";
                    }
                }
            } else {
                print '
				<form action="ejer1form.php" method="GET">
				Introduce un número entero: <input type="number" name="entero" step="1" required>
				<input type="submit" value="Enviar">
				</form>';
            }
		?>
		<a href="ejer1form.html"><br/><br/>Introducir otro número</a>
	</body>
</html>