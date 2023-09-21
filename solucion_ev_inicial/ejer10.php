<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 10</title>
        <meta charset="utf-8">
    </head>
    <body>
		<?php
			$i; $suma=0;
            $n=$_REQUEST["n"];

            echo "Los divisores de $n son ";

			for ($i=1; $i <$n ; $i++)
			{
                if ($n%$i==0)
                {
                    echo "$i, ";
                    $suma+=$i;
                }

			}
            echo "y $n.<br/>";

            if($suma==$n)
                echo "Como la suma de sus divisores menos él mismo es igual al número dado, $n es un número perfecto.";
            else
                echo "El número $n no es perfecto."
		?>
        <a href="ejer10form.html"><br/><br/>Introducir otro número</a>
	</body>
</html>