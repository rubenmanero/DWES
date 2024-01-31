<?php
    include ("layouts/header.php");

	  echo "<a href='index.php'>MENU PRINCIPAL</a><br>";	// Enlace al menú principal

	  echo "<h1>Formulario para rellenar los datos de un nuevo cliente</h1><br>";

    $query = $data["employees"];	// Array con todos los datos de la tabla empleados suministrado por InsertController
?>

<!--Formulario con todos los campos necesarios para rellenar los datos de un nuevo cliente-->
<!--Hay que comprobar en la BD cuáles son NULLABLES y cuáles no (para incluir el atributo 'required')-->
<form action='#' method='get'>
	<table>
	<tr>
		<td>Nombre del cliente</td>
		<td><input type="text" name="NombreCliente" maxlength="50" size="50" required/></td>
	</tr><tr>
		<td>Nombre del contacto</td>
		<td><input type="text" name="NombreContacto" maxlength="30" size="30"/></td>
	</tr><tr>
		<td>Apellido del contacto</td>
		<td><input type="text" name="ApellidoContacto" maxlength="30"  size="30"/></td>
	</tr><tr>
		<td>Teléfono</td>
		<td><input type="text" name="Telefono" maxlength="11" size="11" pattern="+?[0-9]{9,11}" required></td>
	</tr><tr>
		<td>Fax </td>
		<td><input type="text" name="Fax" maxlength="11" size="11" pattern="+?[0-9]{9,11}" required/></td>
	</tr><tr>
		<td>Dirección 1</td>
		<td><input type="text" name="LineaDireccion1" maxlength="50" size="50" required/></td>
	</tr><tr>
		<td>Dirección 2</td>
		<td><input type="text" name="LineaDireccion2" maxlength="50" size="50"/></td>
	</tr><tr>
		<td>Ciudad</td><td>
			<input type="text" name="Ciudad" maxlength="50" size="50" required/></td>
	</tr><tr>
		<td>Región</td>
		<td><input type="text" name="Region" maxlength="50" size="50"/></td>
	</tr><tr>
		<td>País</td>
		<td><input type="text" name="Pais" maxlength="50" size="50"/></td>
	</tr><tr>
		<td>Código Postal</td>
		<td><input type="text" name="CodigoPostal" size="5" pattern="[0-9]{5}"></td>
	</tr><tr>
		<td>Límite Crédito</td>
		<!--Aunque el campo LimiteCredito puede ser NULL se genera un error al ejecutar la sentencia INSERT posterior ('required' necesario)-->
		<td><input type="number" name="LimiteCredito" step="0.01" min="0" max="10000" required></td>
	</tr><tr>
		<td>Código empleado</td>
		<td><?php
			// Aquí se muestra el desplegable con el código, nombre y apellidos de los empleados Representantes de Ventas
			echo "<select name='CodigoEmpleadoRepVentas'>";
            foreach($query as $row){	// Recorremos el array heredado del controlador InsertController y mostramos los datos en el desplegable
                echo "<option value = $row[0]>".$row[0]."-".$row[1]." ".$row[2]." ".$row[3]."</option>";	// Almacenamos como valor del input el código de empleado en $_REQUEST["CodigoEmpleadoRepVentas"]
            }
			echo "</select>";
		?></td>
	</tr>
	</table><br>
	<input type="submit" name="enviar" value="Insertar nuevo cliente">

	<!--Añadimos dos inputs ocultos para pasarle a index.php el controlador y la acción que queremos que se ejecute cuando el usuario pulse el botón submit-->
    <input type="hidden" name="controller" value="insertController">
    <input type="hidden" name="action" value="insertionResult">
</form>
<?php
    include ("layouts/footer.php");
// Vuelve a index.php (línea 35)
?>