<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Repaso 2. Ejercicio 2</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>DATOS MODELOS AUTOMÓVILES</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    //Hay 40 modelos de coches
    $cars = array("Opel"=>array("Corsa", "Astra", "Zafira", "Mokka", "Combo", "Grandland", "Crossland"), "Peugeot"=>array("208", "308", "408", "2008", "3008", "5008"), "Renault"=>array("Clio", "Megane", "Austral", "Kangoo", "Scenic", "Captur", "Espace", "Arkana", "Trafic", "Twingo"), "BMW"=>array("Serie 1", "Serie 3", "Serie 5", "Serie 7", "X1", "X3", "X5", "X6", "XM"), "Volkswagen"=>array("Polo", "Golf", "Jetta", "Passat", "Touran", "Sharan", "Tiguan", "Touareg"));

    //Datos para los 40 modelos en orden
    $data = array("Potencia (CV)"=>array(100, 110, 110, 130, 135, 150, 135, 100, 120, 135, 120, 135, 150, 110, 120, 130, 110, 120, 135, 150, 170, 110, 110, 130, 135, 150, 170, 130, 150, 170, 210, 110, 130, 130, 150, 130, 130, 150, 140, 150), "Aceleracion 0-100 (seg)"=>array(13.1, 12.5, 11.3, 12.1, 14.1, 12.7, 11.3, 10.3, 12.3, 11.6, 10.9, 10.5, 13.2, 12.5, 12.3, 10.9, 12.1, 12.7, 12.3, 10.7, 11.2, 12.3, 12.6, 11.1, 12.2, 12.5, 11.4, 10.1, 11.2, 10.5, 11.7, 10.1, 12.2, 12.5, 11.4, 10.3, 12.8, 11.5, 11.8, 10.9), "Consumo (L/100 km)"=>array(5.7, 6.1, 6.3, 6.6, 5.7, 5.1, 7.3, 5.6, 5.2, 6.8, 6.9, 6.2, 5.4, 6.1, 6.2, 6.6, 5.3, 5.1, 7.3, 6.2, 6.7, 7.1, 7.3, 5.6, 5.7, 5.1, 7.3, 7.6, 5.7, 5.1, 7.3, 6.3, 5.2, 6.2, 6.9, 6.8, 5.9, 6.2, 6.3, 6.6), "Emisiones CO2 (g/km)"=>array(118, 126, 134, 138, 128, 136, 144, 138, 117, 135, 124, 119, 112, 127, 124, 148, 138, 116, 114, 123, 122, 127, 134, 112, 118, 124, 124, 138, 148, 146, 134, 135, 115, 127, 133, 148, 142, 144, 135, 139));

    $i=0;
    foreach($cars as $array){
        foreach($array as $modelo){
            foreach($data as $indice=>$valor){
                $tabla[$modelo][$indice]=$valor[$i];
            }
            $i++;
        }
    }

    // echo "<pre>";
    // print_r($tabla);
    // echo "</pre>";

    echo "<table>
        <tr>
            <th>MARCA</th><th>Modelo</th>";
    foreach($data as $indice=>$valor) {
        echo "<th>$indice</th>";
    }
    echo "</tr>";

    foreach($tabla as $modelo=>$array) {
        foreach($cars as $marca=>$array2) {
            if($array2[0]==$modelo) {
                echo "<tr>";
                echo "<th rowspan='".count($array2)."'>$marca</th>";
            }
        }

        echo "<td>$modelo</td>";
        foreach($array as $indice=>$valor) {
            echo "<td>".$valor."</td>";
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