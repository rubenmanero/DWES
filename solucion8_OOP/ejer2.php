<?php
    session_start();
    include("Menu.php");
?>

<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Hoja 9. Ejercicio 2</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>RESTAURANTE</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    if(!$_REQUEST){
?>
    <h1 class="centrado">Configuración del menú del día</h1><br><br>
    <form action="ejer2.php">
        <table class="formulario">
            <tr>
                <td><label>Día de la semana:</label></td>
                <td><input type="text" name="dia" size="8" required></td>
            </tr>
            <tr>
                <td><label>Fecha:</label></td>
                <td><input type="text" name="fecha" size="8" placeholder="01/01/2000" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="enviar" value="Diseñar menú"></td>
            </tr>
        </table>
    </form>
<?php
    } elseif (isset($_REQUEST["enviar"])) {
        $dia = $_REQUEST["dia"];
        $fecha = $_REQUEST["fecha"];

        $menu = new Menu($dia,$fecha);
        $_SESSION["menu"] = serialize($menu);

        echo "<h1 class='centrado'>Menú del {$menu->getDia()}, {$menu->getFecha()}</h1>";

        echo "<h3>Primeros platos</h3>";
        echo "<form action='ejer2.php'>
            <input type='text' name='primero' size='50'>
            <input type='submit' name='añadir' value='Añadir'>
        </form>";

        echo "<br><h3>Segundos platos</h3>";
        echo "<form action='ejer2.php'>
            <input type='text' name='segundo' size='50'>
            <input type='submit' name='añadir' value='Añadir'>
        </form>";

        echo "<br><h3>Postres</h3>";
        echo "<form action='ejer2.php'>
            <input type='text' name='postre' size='50'>
            <input type='submit' name='añadir' value='Añadir'>
        </form>";
    } elseif (isset($_REQUEST["añadir"])) {
        $menu = unserialize($_SESSION["menu"]);

        if(isset($_REQUEST["primero"])) {
            $menu->setPrimerPlato($_REQUEST["primero"]);
        }
        if(isset($_REQUEST["segundo"])) {
            $menu->setSegundoPlato($_REQUEST["segundo"]);
        }
        if(isset($_REQUEST["postre"])) {
            $menu->setPostre($_REQUEST["postre"]);
        }
        $_SESSION["menu"] = serialize($menu);

        echo "<h1 class='centrado'>Menú del {$menu->getDia()}, {$menu->getFecha()}</h1>";
        //echo "<h1 class='centrado'>Diseño del menú para el $dia, $fecha</h1><br><br>";
        echo "<h3>Primeros platos</h3>";
        $primeros=$menu->getPrimerosPlatos();
        foreach($primeros as $plato) {
            echo "<p>$plato</p>";
        }
        echo "<form action='ejer2.php'>
            <input type='text' name='primero' size='50'>
            <input type='submit' name='añadir' value='Añadir'>
        </form>";

        echo "<br><h3>Segundos platos</h3>";
        $segundos=$menu->getSegundosPlatos();
        foreach($segundos as $plato) {
            echo "<p>$plato</p>";
        }
        echo "<form action='ejer2.php'>
            <input type='text' name='segundo' size='50'>
            <input type='submit' name='añadir' value='Añadir'>
        </form>";

        echo "<br><h3>Postres</h3>";
        $postres=$menu->getPostres();
        foreach($postres as $plato) {
            echo "<p>$plato</p>";
        }
        echo "<form action='ejer2.php'>
            <input type='text' name='postre' size='50'>
            <input type='submit' name='añadir' value='Añadir'>
            <br><br><input type='submit' name='confeccionar' value='Confeccionar carta'>
        </form>";
    } elseif (isset($_REQUEST["confeccionar"])) {
        $menu = unserialize($_SESSION["menu"]);

        echo "<img src='cabecera.jpg' alt='cabecera'>
        <h1 class='centrado carta'>Menú del día</h1>
        <h3 class='centrado carta2'>{$menu->getDia()}, {$menu->getFecha()}</h3><br>
        <h3 class='centrado carta'>Primeros platos</h3>";
        $primeros = $menu->getPrimerosPlatos();
        foreach($primeros as $plato) {
            echo "<p class='centrado carta2'>$plato</p>";
        }

        echo "<br><h3 class='centrado carta'>Segundos platos</h3>";
        $segundos = $menu->getSegundosPlatos();
        foreach($segundos as $plato) {
            echo "<p class='centrado carta2'>$plato</p>";
        }

        echo "<br><h3 class='centrado carta'>Postres</h3>";
        $postres = $menu->getPostres();
        foreach($postres as $plato) {
            echo "<p class='centrado carta2'>$plato</p>";
        }

        echo "<img src='pie.jpg' alt='pie'>";
    }
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>