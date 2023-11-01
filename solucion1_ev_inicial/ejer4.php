<!DOCTYPE html>
<html lang="es">
    <head>
	    <title>Ejercicio 4</title>
	    <meta charset="utf-8">
    </head>
    <body>
        <p>Los números ordenados de menor a mayor son </p>
        <?php
            $n1=$_REQUEST["n1"];
            $n2=$_REQUEST["n2"];
            $n3=$_REQUEST["n3"];
            if ($n1<$n2)
            {
                if ($n2<$n3)
                    echo "$n1, $n2, $n3";

                else
                {
                    if ($n1<$n3)
                        echo  "$n1, $n3, $n2";
                    else
                        echo "$n3, $n1, $n2";
                }
            }
            else
            {
                if ($n1<$n3)
                    echo "$n2, $n1, $n3";
                else
                {
                    if ($n2<$n3)
                        echo "$n2, $n3, $n1";
                    else
                        echo "$n3, $n2, $n1";
                }
            }
        ?>
        <a href="ejer4form.html"><br/><br/>Introducir otros tres números</a>
    </body>
</html>
</body>
    </html>

