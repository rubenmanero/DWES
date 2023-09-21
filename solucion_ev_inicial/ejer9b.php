<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 9b</title>
        <meta charset="utf-8">
    </head>
    <body>
		<?php
			$i; $n1=0; $n2=1; $n;

            $x=$_REQUEST["terminos"];

            echo "Los primeros $x términos de la serie de Fibonacci son<br/><br/>$n1, $n2, ";

			for ($i=3; $i<=$x ; $i++)
			{
				$n=$n1+$n2;
                echo "$n, ";
                $n1=$n2;
                $n2=$n;

                if($i%10==0)
                {
                    echo "<br/>";
                    print "<br/>";
                }
			}
		?>
        <a href="ejer9bform.html"><br/><br/>Introducir otro número de términos</a>
	</body>
</html>