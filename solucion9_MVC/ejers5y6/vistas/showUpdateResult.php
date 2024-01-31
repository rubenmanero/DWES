<?php
    include ("layouts/header.php");

    // Enlace al menú principal del sitio
	echo "<a href='index.php'>MENU PRINCIPAL</a><br>";

	echo "<b>Se procede a la modificación del cliente</b><br>";

    // Mostramos el mensaje de modificación de cliente (si ha tenido éxito o no)
	echo "<p>".$data['update']."</p><br>";

    // Facilitamos un botón al usuario para que pueda volver al menú de selección de cliente pasándole a index.php (mediante campos ocultos) el controlador y la acción pertinentes para que muestre dicho menú
	echo "<br><form action='#' method='get'>
        <input type='submit' value='Selección de cliente' class='boton'>
        <input type='hidden' name='controller' value='UpdateController'>
        <input type='hidden' name='action' value='showPhonesForm'>
    </form>";

    include ("layouts/footer.php");
    // Vuelve a index.php (línea 59)
?>