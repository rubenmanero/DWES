<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 8</title>
        <meta charset="utf-8">
    </head>
    <body>
		<?php
			$i;
            $n=$_REQUEST["n"];

            echo "Los divisores de $n son ";

			for ($i=1; $i <$n ; $i++)
			{
				if ($n%$i==0)
                    echo "$i, ";
			}
            echo "y $n.";
		?>
        <a href="ejer8form.html"><br/><br/>Introducir otro número</a>
	</body>
</html>