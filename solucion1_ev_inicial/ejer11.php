<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 11</title>
        <meta charset="utf-8">
    </head>
    <body>
		<?php
			$i; $suma=0;
            $n=$_REQUEST["n"];

            if($n==1||$n==2)
                echo "El número $n es primo.";
            else
            {
                for ($i=2; $i<$n ; $i++)
                {
                    if ($n%$i==0)
                    {
                        echo "El número $n no es primo.";
                        break;
                    }
                }
                if($i==($n))
                    echo "El número $n es primo.";
            }
		?>
        <a href="ejer11form.html"><br/><br/>Introducir otro número</a>
	</body>
</html>