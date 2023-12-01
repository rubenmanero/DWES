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
            <p class="derecha"><a class="derecha" href="index.php">Inicio</a></p>
            <h1 class="centrado">EJERCICIO 1</h1><br>
<?php
//Si ponemos if(!REQUEST) entrará en el condicional porque venimos de un formulario
//Por lo tanto, evaluamos un elemento del formulario de este ejercicio
    if(!isset($_REQUEST["dni"]))
    {
?>
<!--La forma de restringir los datos del formulario es mediante inputs tipo 'text' con un patrón determinado-->
        <form action="ejer1.php" method="get">
            Introduzca un número de DNI: <input type="text" name="dni" pattern="[0-9]{8}" required><br><br>
            Introduzca la letra del NIF correspondiente: <input type="text" name="letra" pattern="[A-HJ-NP-TV-Z]{1}" required><br><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </form>
<?php
    } else {
        $dni=$_REQUEST["dni"];
        $letra=$_REQUEST["letra"];
//Función que recibe un número, calcula el resto de dividir entre 23 y asigna una letra de NIF según el resto
        function letraNIF($numero){
            $arrayNIF=array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
            $indice=$numero%23;
            //echo "<p>$arrayNIF[$indice]</p>";
            return $arrayNIF[$indice];
        }
        $NIF=letraNIF($dni);
//Evaluamos si la letra introducida por el usuario coincide con la del NIF asociado al número de DNI
        if($letra==$NIF)
        {
            echo "<p>El NIF $dni$letra es correcto.</p>";
        } else {
            echo "<p>El NIF $dni$letra es incorrecto.</p>";
        }
        echo "<br><a href='ejer1.php'>Volver al formulario</a>";
    }
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>