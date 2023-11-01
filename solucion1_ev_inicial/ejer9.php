<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 9</title>
        <meta charset="utf-8">
    </head>
    <body>
		<?php
			$i; $n1=0; $n2=1; $n;

            echo "Los primeros 20 términos de la serie de Fibonacci son $n1, $n2,  ";

			for ($i=3; $i<=20 ; $i++)
			{
				$n=$n1+$n2;
                echo "$n, ";
                $n1=$n2;
                $n2=$n;
			}
		?>
	</body>
</html>