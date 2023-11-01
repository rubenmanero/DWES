<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejercicio 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$radio=$_REQUEST["radio"];
			$longitud=2*pi()*$radio;
            $area=pi()*pow($radio,2);
		    echo "El radio elegido es $radio.<br/>";
            echo "La longitud de la circunferencia es $longitud.<br/>";
            echo "El área del círculo es $area.<br/>";
		?>
		<a href="ejer2form.html"><br/><br/>Introducir otro radio</a>
	</body>
</html>