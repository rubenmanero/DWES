<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
    <title>Ejercicio 1. Hoja 4</title>
=======
    <title>Hoja 4. Ejercicio 1</title>
>>>>>>> c7e9a6205aa08c145ee64e4fb9884d90abfc6e3b
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>RESTO DIVISIÓN ENTRE 12</h1>
    </header>
    <section>
        <nav></nav>
        <main>
            <?php
                if ($_REQUEST) {
                    print "<h1>Resultado</h1>";
<<<<<<< HEAD
                    echo "<p>El número introducido ha sido el ",$_REQUEST['numero'],
                        "<br> y el resto de su división por 12 es <b>",dividir($_REQUEST['numero']),"</b>.</p>";
=======
                    $resultado = dividir($_REQUEST['numero']);
                    echo "<p>El número introducido ha sido el ",$_REQUEST['numero'],
                    "<br> y el resto de su división por 12 es <b>$resultado</b>.</p>";
>>>>>>> c7e9a6205aa08c145ee64e4fb9884d90abfc6e3b
                }
            ?>
            <h1>Formulario</h1>
            <form action="ejer1.php" method="get">
                <b>Escribe un número entero positivo:</b> <br> <br>
                <input type="number" name="numero" min="1" required/> <br> <br>
                <input type="submit" value="Enviar"/>
                <input type="reset" value="Borrar"/>
            </form>
        </main>
        <aside></aside>
    </section>
    <footer></footer>
</body>
</html>

<?php
    function dividir($x)
    {
        $r = ["cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez", "once"];
        $resto = $x % 12;
        return $r[$resto];
    }
?>