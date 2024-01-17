<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Repaso 2. Ejercicio 4</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>VÍAS DE ESCALADA</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    $zonas=array("Morata"=>array("Peña del reloj","Puente de roca","La gran placa"), "Riglos"=>array("Fire","Pisón","Mallo colorao"));
    $vias=array("Traslosbares","Pasteles","Limauñas","Anisdelmono","KakadeLuxe","Alocochinojabalín");
    $dificultad=array("6a","8a","7a","7b","V+","6b");


    $i=0;
    foreach($zonas as $indice=>$array){
        foreach($array as $valor){
            $tabla[$valor][$vias[$i]]=$dificultad[$i];
            $i++;
        }
    }

    echo "<pre>";
    print_r($tabla);
    echo "</pre>";

    echo "<table>
    <tr>
        <th>Zona</th><th>Vía</th><th>Dificultad</th>
    </tr>";

    foreach($tabla as $zona=>$array) {
        echo "<tr>";
        echo "<td>$zona</td>";
        foreach($array as $indice=>$valor) {
            echo "<td>".$indice."</td><td>".$valor."</td>";
        }
        echo "</tr>";
    }

echo "</table>";
?>
        </main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>