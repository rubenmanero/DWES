<?php
    include ("layouts/header.php");

    // Enlace de vuelta al menú principal
	echo "<a href='index.php'>MENU PRINCIPAL</a><br>";

	echo "<b>Se procede a la inserción de un nuevo cliente</b><br>";

    // Aquí se mostrará un texto con los datos introducidos si la consulta ha tenido éxito o un mensaje de error si no se ha podido realizar la inserción
	echo $data['insert']."<br>";

	echo "<br><form action='index.php' method='get'>
        <input type='submit' value='Formulario de inserción' class='boton'>
        <input type='hidden' name='controller' value='InsertController'>
        <input type='hidden' name='action' value='showClientsForm'>
    </form>";   // Si el usuario pulsa el botón "Formulario de inserción" se vuelve a la página anterior con el formulario

    include ("layouts/footer.php");
    // Vuelve a index.php (línea 40)
?>