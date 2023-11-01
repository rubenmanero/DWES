<!DOCTYPE html>
<html lang="es">
    <head>
	    <title>Ejercicio 3</title>
	    <meta charset="utf-8">
    </head>
    <body>
        <?php
        if (isset($_REQUEST["dia"]))
		{
            $dia=$_REQUEST["dia"];
            switch($dia)
            {
                case 1: echo "El día escogido es el Lunes.";
                    break;
                case 2: echo "El día escogido es el Martes.";
                    break;
                case 3: echo "El día escogido es el Miercoles.";
                    break;
                case 4: echo "El día escogido es el Jueves.";
                    break;
                case 5: echo "El día escogido es el Viernes.";
                    break;
                case 6: echo "El día escogido es el Sábado.";
                    break;
                case 7: echo "El día escogido es el Domingo.";
            }
        }
		else
		{
            echo '
            <form action="ejer3form.php" method="GET">
			Introduce un número del 1 al 7 para seleccionar un día de la semana: <input type="number" name="dia" step="1" min="1" max="7" required>
			<input type="submit" value="Enviar">
		    </form>';
        }
        ?>
        <a href="ejer3form.html"><br/><br/>Introducir otro número</a>
    </body>
</html>
</body>
    </html>

