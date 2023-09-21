<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejercicio 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		if (isset($_REQUEST["radio"]))
		{
			$radio=$_REQUEST["radio"];
			$longitud=2*pi()*$radio;
            $area=pi()*pow($radio,2);
		    echo "El radio elegido es $radio.<br/>";
            echo "La longitud de la circunferencia es ".round($longitud,2).".<br/>";
            echo "El área del círculo es ".round($area,2).".<br/>";
		}
		else
		{
			echo '
			<form action="ejer2form.php" method="GET">
			Introduce el valor del radio: <input type="number" name="radio" step="0.1" min="0" required>
			<input type="submit" value="Enviar">
			</form>';
		}
		?>
		<a href="ejer2form.html"><br/><br/>Introducir otro radio</a>
	</body>
</html>