<?php
session_start();
if (!isset($_SESSION['contadoraciertos']) || isset($_REQUEST["reset"])) {
    $_SESSION['contadoraciertos'] = 0;
	$_SESSION['contadorfallos'] = 0;
}
?>

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
            <h1 class="centrado fecha">EJERCICIO 2</h1><br>
            <h2>Autonomías y capitales</h2><br>
            <p>Esta aplicación es un juego sobre conocimientos de geografía política de España.</p><br>
<?php
    //Creación de arrays

	$comunidades=array("Andalucía", "Aragón", "Principado de Asturias", "Islas Baleares", "Canarias", "Cantabria", "Castilla y León", "Castilla La Mancha", "Cataluña", "Comunidad Valenciana", "Extremadura", "Galicia", "Comunidad de Madrid", "Región de Murcia", "Comunidad Foral de Navarra", "País Vasco", "La Rioja", "Ceuta", "Melilla");

	$capitales=array("Sevilla", "Zaragoza", "Oviedo", "Palma de Mallorca", "Santa Cruz de Tenerife y Las Palmas de Gran Canaria", "Santander", "Valladolid", "Toledo", "Barcelona", "Valencia", "Mérida", "Santiago de Compostela", "Madrid", "Murcia", "Pamplona", "Vitoria-Gasteiz", "Logroño", "Ceuta", "Melilla");

	$comunidadesYcapitales=array();
    //Creamos el array asociativo con las comunidades como índices y las capitales como valores
    for($i=0;$i<19;$i++){
        $comunidadesYcapitales[$comunidades[$i]]=$capitales[$i];
    }
    //print_r($comunidadesYcapitales);

	//Ordenamos para mostrar por orden alfabético
	sort($comunidades);
	sort($capitales);
?>
	<h3>Enlaza la ciudad con la región a la que pertenece</h3><br>
    <form action='ejer2.php' method='GET'>
        <p><label>Elige comunidad autónoma</label>
        <select name='nombreComunidad'>
<?php
    //Mostramos las comunidades en el menú desplegable
    foreach($comunidades as $nomComunidad){
        echo "<option value='$nomComunidad'>$nomComunidad</option>";
    }
?>
        </select><br><br>
        <label>Elige su capital</label>
        <select name='nombreCapital'>
<?php
    //Mostramos las capitales en el menú desplegable
    foreach($capitales as $nomCapital){
        echo "<option value='$nomCapital'>$nomCapital</option>";
    }
?>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='submit' name='enviar' value='Comprobar'></p><br>
    </form>
<?php
    if(isset($_REQUEST["enviar"])) {
        $comunidad=$_REQUEST['nombreComunidad'];
        $capital=$_REQUEST['nombreCapital'];
        echo "<h3>Resultado de la consulta: ";
        if ($comunidadesYcapitales[$comunidad]==$capital) {
            echo "Acierto</h3><br> <p>$capital SI es la capital de la comunidad $comunidad</p>";
            $_SESSION['contadoraciertos']++;
        }
        else {
            echo "Fallo</h3><br> <p>$capital NO es la capital de la  comunidad $comunidad</p>";
            $_SESSION['contadorfallos']++;
        }
        echo "<br><p>Llevas ". $_SESSION['contadoraciertos']." aciertos y ".$_SESSION['contadorfallos']." fallos.</p><br>";
        echo "<p>
            <form action='ejer2.php' method='get'>
                <input type='submit' name='reset' value='Volver a empezar'>
            </form>
        </p>";
    }
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>