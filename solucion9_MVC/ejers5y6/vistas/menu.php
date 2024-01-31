<?php
// Incluimos el código HTML necesario para cargar la vista. Mira el archivo header.php en el directorio /layouts
include ("layouts/header.php");
?>

	<h3 class='centrado'>Acceso a la base de datos <i>"jardineria"</i></h3><br><br>
	<p>Elija la consulta que desea realizar sobre la base de datos:</p><br><br>


	<!--Aquí mostramos cuatro botones para que el usuario pueda navegar por el sitio web-->
	<!--Fijate que todos tienen el nombre "controller", que será el elemento del array $_REQUEST cuyo valor evaluaremos para realizar las distintas llamadas a los controladores. Se podría haber empleado otro método pero de momento buscamos funcionalidad, la optimización se lleva a cabo posteriormente-->
	<form class="tablas" action="index.php" method="get">
		<table><tr>
			<td><input type="submit" name="controller" value="Consultar clientes" class="boton"></td>
			<td><input type="submit" name="controller" value="Consultar productos" class="boton"></td>
			<td><input type="submit" name="controller" value="Insertar clientes" class="boton"></td>
			<td><input type="submit" name="controller" value="Modificar clientes" class="boton"></td>
		</tr></table>

	<!--Incluimos un campo oculto que pase la acción que realizará el controlador correspondiente. En este caso no es necesario, pero sirve de ejemplo para posteriores formularios. Si no incluimos la acción podríamos encontrarnos errores en index.php por no haberla definido previamente-->
		<input type="hidden" name="action" value="true">
	</form>

<?php
// Incluimos el final del código HTML que cierra el archivo
include ("layouts/footer.php");
?>

<!--Sigue leyendo en index.php desde donde te habías quedado (línea 8)-->