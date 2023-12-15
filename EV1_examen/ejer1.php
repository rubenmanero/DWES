<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Examen 1ª evaluación</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>EXAMEN 1ª EVALUACIÓN</h1>
    </header>
    <section>
        <nav></nav>
        <main>
            <h1 class="centrado fecha">EJERCICIO 1</h1><br>
            <h2>Suma de matrices</h2><br>
            <p>Esta aplicación resuelve la suma de dos matrices cuadradas de dimensión <i>NxN</i> cuyos elementos son números aleatorios entre -20 y 20. La dimensión <i>N</i> no puede ser mayor que 5.</p><br>
<?php
    function sumaMatricesN($arrayA,$arrayB,$n) {
        for($i=0;$i<$n;$i++){
            for($j=0;$j<$n;$j++){
                $arrayC[$i][$j]=$arrayA[$i][$j]+$arrayB[$i][$j];
            }
        }
        return $arrayC;
    }
    if($_REQUEST)
    {
        $n=$_REQUEST["dimension"];
        for($i=0;$i<$n;$i++){
            for($j=0;$j<$n;$j++){
                $matrizA[$i][$j]=rand(-20,20);
                $matrizB[$i][$j]=rand(-20,20);
            }
        }

        $matrizC = sumaMatricesN($matrizA,$matrizB,$n);

        echo '<div class="tablas">';
        echo '<table class="matriz">';
        for($i=0;$i<$n;$i++){
            echo '<tr>';
            for($j=0;$j<$n;$j++){
                echo '<td class="matriz">';
                echo $matrizA[$i][$j];
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        echo '&nbsp; + &nbsp;';

        echo '<table class="matriz">';
        for($i=0;$i<$n;$i++){
            echo '<tr>';
            for($j=0;$j<$n;$j++){
                echo '<td class="matriz">';
                echo $matrizB[$i][$j];
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        echo '&nbsp; = &nbsp;';

        echo '<table class="matriz">';
        for($i=0;$i<$n;$i++){
            echo '<tr>';
            for($j=0;$j<$n;$j++){
                echo '<td class="matriz">';
                echo $matrizC[$i][$j];
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';

        echo '<br>';
    }
?>
    <form class="borde" action="#" method="get">
        <p>Introduzca la dimensión de las matrices:</p><br>
        <p><input type="number" name="dimension" min="1" max="5" required>
        <input type="submit" value="Enviar"></p>
    </form>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>