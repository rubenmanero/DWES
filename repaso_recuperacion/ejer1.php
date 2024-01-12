<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Repaso 2. Ejercicio 1</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>CAIDA LIBRE</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    if(!$_REQUEST) {
        echo "<p>Escriba una altura entre 1 y 1000 metros para calcular la caída libre de un objeto:</p><br>";
        echo '<form action="ejer1.php" method="get">
            <input type="number" name="altura" min="0" max="1000">
            <input type="submit" value="Calcular">
        </form>';
    } else {
        function tiempo($h) {
            $g=9.8;
            return sqrt(2*$h/$g);
        }
        function velocidad($t) {
            $g=9.8;
            return $g*$t;
        }
        function altura($h, $t) {
            $g=9.8;
            return $h-0.5*$g*pow($t,2);
        }

        $h = $_REQUEST["altura"];
        $t = tiempo($h);
        $celdas = floor($t);

        echo "<p>Ha seleccionado una altura de $h metros.</p><br>";
        echo "<p>Los datos de velocidad y altura en cada instante de tiempo son los siguientes:</p><br>";

        print("<table border='1'>");

        print("<tr><td width='80' height='10'> t (s) </td>");
        for($i=0;$i<=$celdas;$i++)
        {
            print("<td width='50' height='10'>$i</td>");
        }
        print("<td width='50' height='10'>".round($t,1)."</td></tr>");

        print("<tr><td width='80' height='10'> v<sub>f</sub> (m/s)</td>");
        for($i=0;$i<=$celdas;$i++)
        {
            print("<td width='50' height='10'>".round(velocidad($i),1)."</td>");
        }
        print("<td width='50' height='10'>".round(velocidad($t),1)."</td></tr>");

        print("<tr><td width='80' height='10'> h (m) </td>");
        for($i=0;$i<=$celdas;$i++)
        {
            print("<td width='50' height='10'>".round(altura($h,$i),1)."</td>");
        }
        print("<td width='50' height='10'>".abs(round(altura($h,$t),1))."</td></tr>");

	    print("</table><br>");
        print("<a href='ejer1.php'>Seleccionar otra altura</a>");
    }
?>
        </main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>