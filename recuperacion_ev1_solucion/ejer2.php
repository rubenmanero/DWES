<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Recuperación. Ejercicio 2</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>NOTAS ALUMNOS</h1>
    </header>
    <section>
        <nav></nav>
        <main><div>
<?php
    $alumnos = array ("Alberto", "Ana", "Beatriz", "Carlos", "Diego", "Elena", "Gema", "Héctor", "José", "Leire", "Manuel", "Marta", "Roberto", "Sandra", "Sergio", "Tomás", "Vanesa", "Víctor");
    $asignaturas = array ("Biología", "Historia", "Informática", "Lengua", "Matemáticas");
    $notas = array(array (5,4,7,6,6), array (8,7,9,8,10), array (5,7,8,5,4), array (4,8,9,8,6), array (5,6,7,7,7), array (8,8,8,9,7), array (7,5,7,6,6), array (6,8,6,7,10), array (10,9,10,8,7), array (7,8,8,7,6), array (4,5,6,7,3), array (3,4,4,5,6), array (6,7,7,8,8), array (8,7,7,8,9), array (7,5,5,8,7), array (10,9,10,8,8), array (7,8,7,10,9), array (4,5,7,4,8));

    for ($i=0;$i<count($alumnos);$i++) {
        for ($j=0;$j<count($asignaturas);$j++) {
            $tabla[$alumnos[$i]][$asignaturas[$j]]=$notas[$i][$j];
        }
    }
    //echo "<pre>";
    //print_r($tabla);
    //echo "</pre>";

    //Otra forma:
    // $i=0;
    // foreach($alumnos as $alumno){
    //     $j=0;
    //     foreach($asignaturas as $asignatura){
    //         $tabla[$alumno][$asignatura] = $tabla[$i][$j];
    //     }
    // }

    echo "<table><tr>
            <th>Alumnos</th>";
    for($i=0;$i<count($asignaturas);$i++) {
        echo "<th>".$asignaturas[$i]."</th>";
    }
    echo "</tr>";

    foreach ($tabla as $i => $array) {
        echo "<tr><th class='left'>$i</th>";
        foreach ($array as $j => $valor) {
            echo "<td class='center'>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
		</div></main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>

