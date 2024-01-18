<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Recuperación. Ejercicio 1</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>TIRO VERTICAL</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    function tiempoAlturaMaxima($v, $g) {
        return $v/$g;
    }

    function alturaMaxima($h, $v, $g) {
        $t=tiempoAlturaMaxima($v, $g);
        return $h+$v*$t-0.5*$g*pow($t,2);
    }

    function tiempoMaxSuelo($h, $v, $g) {
        $h1=alturaMaxima($h, $v, $g);
        return sqrt(2*$h1/$g);
    }

    function velocidadFinal($h, $v, $g) {
        $t=tiempoMaxSuelo($h, $v, $g);
        return $g*$t;
    }

    function tiempoTotal($h, $v, $g) {
        return tiempoAlturaMaxima($v, $g) + tiempoMaxSuelo($h, $v, $g);
    }

    if(!$_REQUEST) {
?>
    <img src="caida_libre.gif" alt="caida_libre.gif">
    <form action="ejer1.php">
        Introduce una velocidad inicial de lanzamiento:<br>
        <input type="number" name="velocidad" min="0"><br><br>
        Introduce la altura desde donde se produce el lanzamiento:<br>
        <input type="number" name="altura" min="0"><br><br>
        <input type="submit" value="Enviar datos">
    </form>

<?php
    } else {
        $g=9.8;
        $velocidad=$_REQUEST["velocidad"];
        $altura=$_REQUEST["altura"];

        $t1=round(tiempoAlturaMaxima($velocidad, $g), 2);
        $hmax=round(alturaMaxima($altura, $velocidad, $g), 2);
        $vmax=round(velocidadFinal($altura, $velocidad, $g), 2);
        $tfinal=round(tiempoTotal($altura, $velocidad, $g), 2);

        if($velocidad==0){
            echo '<img src="caida_libre.gif" alt="caida_libre.gif">';
            echo "Se ha seleccionado una velocidad inicial nula y una altura de $altura metros desde la que se deja caer el objeto.<br><br>";
            echo "Para un cuerpo en caída libre lanzado desde esa altura, el tiempo que tarda el objeto en chocar con el suelo es de $tfinal segundos y lo hará con una velocidad de $vmax m/s.<br><br>";
        } else {
            echo '<img src="caida_libre.gif" alt="caida_libre.gif">';
            echo "Se ha seleccionado una velocidad inicial de lanzamiento de $velocidad m/s hacia arriba y una altura inicial de $altura metros.<br><br>";
            echo "Un cuerpo lanzado verticalmente hacia arriba con dicha velocidad tarda $t1 segundos en alcanzar la altura máxima, que será de $hmax metros.<br><br>
            El tiempo total desde el lanzamiento hasta que choca con el suelo es de $tfinal segundos y lo hará con una velocidad final de $vmax m/s.<br><br>";
        }
        echo "<a href='ejer1.php'>Introducir nuevos datos</a>";
    }
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>