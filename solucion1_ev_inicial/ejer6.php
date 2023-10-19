<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 6</title>
        <meta charset="utf-8">
    </head>
    <body>
		<?php
			$i=1; $j=1; $k;
            $n=$_REQUEST["n"];

            echo "<h2>Tabla de multiplicar del $n resuelta con bucle WHILE</h2>";
            echo "La tabla de multiplicar del $n es:<br/>";

			while ($i<=10)
			{
					echo "$i x $n =";
					echo ($i *$n);
                    echo "<br/>";
                    $i++;
			}
            echo "<h2>Tabla de multiplicar del $n resuelta con bucle DO WHILE</h2>";
            echo "La tabla de multiplicar del $n es:<br/>";

			do
			{
					echo "$j x $n =";
					echo ($j *$n);
                    echo "<br/>";
                    $j++;
			} while ($j<10);

            echo "<h2>Tabla de multiplicar del $n resuelta con bucle FOR</h2>";
            echo "La tabla de multiplicar del $n es:<br/>";

			for ($k=1 ; $k<=10 ; $k++)
			{
					echo "$k x $n =";
					echo ($k *$n);
                    echo "<br/>";
			}
		?>
		<a href="ejer6form.html"><br/><br/>Introducir otro número</a>
	</body>
</html>