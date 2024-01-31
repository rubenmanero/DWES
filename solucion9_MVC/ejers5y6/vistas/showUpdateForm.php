<?php
    include ("layouts/header.php");

    // Enlace al menú principal
	echo "<a href='index.php'>MENU PRINCIPAL</a><br>";

	echo "<h1>Modificar datos del cliente</h1><br>";

    $registro = $data['client'][0];     // Recogemos los datos del cliente, el elemento $data['client][0] es una fila la tabla 'clientes' ($data es un array tridimensional)
?>
    <!--Utilizamos el array $registro para ir mostrando los datos del cliente en todos los inputs del formulario-->
    <form  action='#' method='GET'>
    <table>
    <tr>
        <td>CodigoCliente:</td>
        <td><input class='readonly' type='text' name='CodigoCliente' value='<?php echo "$registro[0]";
        // Mostramos el código de cliente con el atributo 'readonly' para que no pueda ser modificado
        ?>' maxlength='50'size='50' readonly></td>
    </tr>
    <tr>
        <td>NombreCliente:</td>
        <td><input type='text' name='NombreCliente' value='<?php echo $registro[1];?>' maxlength='50'size='50' required></td>
    </tr>
    <tr>
        <td>NombreContacto:</td>
        <td><input type='text' name='NombreContacto' value='<?php echo $registro[2];?>' maxlength='50'size='50'></td>
    </tr>
    <tr>
        <td>ApellidoContacto</td>
        <td><input type='text' name='ApellidoContacto' value='<?php echo $registro[3];?>' maxlength='30'size='50'></td>
    </tr>
    <tr>
        <td>Telefono:</td>
        <td><input type='text' name='Telefono' value='<?php echo $registro[4];?>' maxlength='15'size='50' pattern="[0-9]{9,11}" required></td>
    </tr>
    <tr>
        <td>Fax:</td>
        <td><input type='text' name='Fax' value='<?php echo $registro[5];?>' maxlength='15' size='50' pattern="[0-9]{9,11}" required></td>
    </tr>
    <tr>
        <td>LineaDireccion1:</td>
        <td><input type='text' name='LineaDireccion1' value='<?php echo $registro[6];?>' maxlength='50' size='50' required></td>
    </tr>
    <tr>
        <td>LineaDireccion2:</td>
        <td><input type='text' name='LineaDireccion2' value='<?php echo $registro[7];?>' maxlength='50' size='50'></td>
    </tr>
    <tr>
        <td>Ciudad:</td>
        <td><input type='text' name='Ciudad' value='<?php echo $registro[8];?>' maxlength='50' size='50' required></td>
    </tr>
    <tr>
        <td>Region:</td>
        <td><input type='text' name='Region' value='<?php echo $registro[9];?>' maxlength='50' size='50'></td>
    </tr>
    <tr>
        <td>Pais:</td>
        <td><input type='text' name='Pais' value='<?php echo $registro[10];?>' maxlength='50' size='50'></td>
    </tr>
    <tr>
        <td>CodigoPostal:</td>
        <td><input type='text' name='CodigoPostal'  value='<?php echo $registro[11];?>' maxlength='10' size='50' pattern="[0-9]{4,6}"></td>
    </tr>
    <tr>
        <td>CodigoEmpleadoRepventas:</td>
        <td> <?php
        // Mostramos en el desplegable los empleados Representantes de Ventas para que este campo pueda ser modificado
            $query = $data['employees'];
            echo "<select name = 'CodigoEmpleadoRepVentas'>";
            foreach($query as $row){
                echo "<option ";
                if($row[0]==$registro[12])      // Si el código de empleado de la tabla 'empleados' coincide con el código de empleado Representante de ventas asodiado al cliente en la tabla 'clientes', le asignamos el atributo selected
							echo "selected "; //Para que aparezca seleccionado por defecto el empleado asignado al cliente
                // En el desplegable mostramos CodigoEmpleado, Nombre y Apellidos de los Representantes de Ventas
                echo "value = $row[0]>".$row[0]."-".$row[1]." ".$row[2]." ".$row[3]."</option>";    // Almacenamos en 'value' su CodigoEmpleado
            }
			echo "</select>";
            ?>
        </td>
    </tr>
    <tr>
        <td>LimiteCredito:</td>
        <td><input  type="number" name='LimiteCredito' value='<?php echo $registro[13];?>' maxlength='15' size=50 step="0.01" min="0" max="1000000" required></td>
    </tr>
    <tr>
        <!--Si el usuario pulsa el botón "Selecciona otro cliente", le pasaremos a index.php un valor para evaluar en el switch y que vuelva al formulario de selección de cliente-->
        <td><input type="submit" name="controller" value="Selecciona otro cliente" class="boton"></td>
        <!--Si el usuario pulsa el botón "Modificar cliente", le pasaremos a index.php otro valor para evaluar en el switch y que proceda a la modificación de los datos del cliente-->
        <td><input type="submit" name="controller" value="Modificar cliente" class="boton"></td>
    </tr>
    </table>
        <!--Pasamos un campo oculto con cualquier valor para la variable $action y evitar errores de variable indefinida-->
            <input type="hidden" name="action" value="true">
    </form>
<?php
    include ("layouts/footer.php");
// Vueve a index.php (línea 49)
?>