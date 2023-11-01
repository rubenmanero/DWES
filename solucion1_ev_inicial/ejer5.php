<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 5</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>EJERCICIO CONDICIONALES ANIDADOS</h1>
        <?php
            $n= rand(0,500);
                echo "El número obtenido es ",$n ,".<br/>";
            if($n<=99)
                echo "Este número está en el intervalo [0,100)";
            elseif ($n <=199)
                echo "Este número está en el intervalo [100,200)";
            elseif ($n <=299)
                echo "Este número está en el intervalo [200,300)";
            elseif ($n <=399)
                echo "Este número está en el intervalo [300,400)";
            else
                echo "Este número está en el intervalo [400,500]";

        ?>
    </body>
</html>