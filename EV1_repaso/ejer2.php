<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Examen de repaso</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>REPASO 1ª EVALUACIÓN</h1>
    </header>
    <section>
        <nav></nav>
        <main>
            <p class="derecha"><a href="index.php">Inicio</a></p>
            <h1 class="centrado">EJERCICIO 2</h1><br>
            <?php
if (isset($_REQUEST["enviar"]))
{
    //Función que evalúa si un número es primo devolviendo true o false
    function esprimo($x)
    {
        if ($x==1) { return false; }
        elseif ($x==2) { return true; }
        else
        {
            for ($i=2;$i<=$x/2;$i++)
            {
                if ($x%$i==0)
                {
                    return false;
                }
            }
                return true;
        }
    }

    //Función que recibe un array (supuestamente de NxM elementos) y muestra una tabla con los elementos del array
    function tablaNxM($n, $m, $array)
    {
        echo "<h1 class='centrado'>Tabla de $n filas y $m columnas con los primeros ".$n*$m." números primos</h1><br>";
        echo "<div class='tablas centrado'><table class='primos'>";
        $contador=0;
        for ($i=1;$i<=$n;$i++) {
            echo '<tr>' ;
            for ($j=1;$j<=$m;$j++) {
                echo '<td class="centrado primos">';
                echo $array[$contador];
                $contador++;
                echo '</td>';
            }
            echo '</tr>';
        }
        echo "</table></div>";
    }

    $n=$_REQUEST["nfilas"];
    $m=$_REQUEST["mcolumnas"];
    $primo=1;
    for($i=0;$i<$n*$m;$i++) //Creación de un array con los primeros n*m números primos
    {
        while(!esprimo($primo)) //También se podría meter este bucle en la función tablaNxM y nos evitaríamos crear el array
        {
            $primo++; //Mientras el número no es primo, el número a evaluar aumenta en 1
        }
        $arrayprimos[$i]=$primo; //Cuando se ha encontrado un número primo sale del bucle y lo almacena en el array
        $primo++; //Es necesario pasar al siguiente número a evaluar
    }

/*
    //Otra opción de bucle para crear el array o para introducir dentro de la función tablaNxM
    $cantidad=0;
    $primo=1;
    while($cantidad<$n*$m)  //El contador cantidad solo avanza si encuentra un número primo. Ojo, puede salir un bucle infinito si no se implementa bien la función esprimo() al igual que en la anterior opción
    {
        if(esprimo($primo))
        {
            arrayprimos[cantidad]=$primo;
            cantidad++; //El contador cantidad solo avanza si encuentra un número primo
        }
        $primo++; //Aumenta en 1 el número a evaluar, tanto si ha encontrado un número primo como si no
    }
*/

    tablaNxM($n,$m,$arrayprimos);
    echo '<br>';
}

echo
'
    <h1>Tabla de <i>n</i> filas y <i>m</i> columnas</h1><br>
    <form class="borde" action="ejer2.php" method="get">
    Introduce el número de filas de la tabla:
      <input type="number" name="nfilas" min="1" required>
    <br><br>
    Introduce el número de columnas de la tabla:
      <input type="number" name="mcolumnas" min="1" required>
    <br><br>
    <input type="submit" value="Enviar" name="enviar">
'
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>