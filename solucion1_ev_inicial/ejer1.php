<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejercicio 1</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$entero=$_REQUEST["entero"];
			if($entero==0)
				echo $entero, " es neutro.";
			else
			{
				if ($entero%2==0)
					echo $entero, " es par.";
				else
        			echo $entero, " es impar.";
    		}
		?>
		<a href="ejer1form.html"><br/><br/>Introducir otro número</a>
	</body>
</html>