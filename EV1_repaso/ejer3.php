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
            <p class="derecha"><a href="index.php">Inicio</a></p>
            <h1 class="centrado">EJERCICIO 3</h1><br>
<?php
// Mostrar fecha arriba a la derecha en color marrón
	$fecha=date("d-m-Y");
	echo "<h2 class='fecha derecha'>Fecha: $fecha </h2><br>";
// Conectar con el servidor de base de datos
    $conexion = mysqli_connect ("localhost", "root", "")
        or die ("No se puede conectar con el servidor");
// Seleccionar base de datos
    mysqli_select_db ($conexion,"jardineria")
        or die ("No se puede seleccionar la base de datos");

if (isset($_REQUEST['enviar'])) {
    // Realizar consulta en BD
		$proveedor=$_REQUEST['proveedor'];

		$instruccion = "SELECT CodigoProducto, Gama, Nombre, Dimensiones, CantidadEnStock, PrecioProveedor FROM  productos WHERE Proveedor='$proveedor' ORDER BY CodigoProducto";

		$consulta = mysqli_query ($conexion,$instruccion)
            or die ("Fallo en la consulta");

    // Mostrar resultados de la consulta
		echo "<h1 class='centrado'>Resultado de la consulta de productos del proveedor $proveedor</h1>";

		$totprod=mysqli_num_rows($consulta);
		print ("<table>");
        print ("<tr>");
        print ("<th>Código producto</th>");print ("<th>Gama</th>");
        print ("<th>Nombre</th>\n"); print ("<th>Dimensiones</th>\n");
        print ("<th>Cantidad Stock</th>"); print ("<th>Precio Proveedor</th>");
        print ("</tr><br>");

        //Inicializamos variables para realizar la suma de la cantidad del stock y la suma de precios de los productos
		$totstock=$sumaprecio=0;

        for ($cont=1; $cont<=$totprod;$cont++) {
            $resultado = mysqli_fetch_row ($consulta);
            echo "<tr>";
			for ($i=0;$i<6;$i++) {
                echo "<td>" .$resultado[$i]. "</td>";
            }
            //Sumamos el stock del producto mostrado en cada fila
            $totstock+=$resultado[4];
            //Sumamos el precio del producto
			$sumaprecio+=$resultado[5];
            echo "</tr>";
         }
         //Calculamos la media de precios de los productos
		 $preciomedio=$sumaprecio/$totprod;
         //Mostramos los resultados obtenidos
		 echo "<tr>",
			    "<td colspan='5'>Total productos diferentes:</td>
                <td>".$totprod."</td>
            </tr>";
		 echo "<tr>",
		        "<td colspan='5'>Precio medio por producto:</td>
                <td>".$preciomedio."</td>
            </tr>";
		 echo "<tr>
                <td colspan='5'>Total cantidad stock productos:</td>
                <td>".$totstock."</td>
            </tr>";
         print ("</table><br>");
}

//Mostramos el formulario al final de la tabla de resultados
echo "<h1>Consulta de productos por proveedor </h1><br>";
echo "<form class='borde' action='ejer3.php' method='get'>";
echo "<p>Selecciona proveedor: ";
$instruccion = "SELECT DISTINCT Proveedor FROM productos ORDER BY Proveedor";
$consulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta");
echo "<select name='proveedor'>";
$nfilas = mysqli_num_rows ($consulta);
for ($i=0; $i<$nfilas; $i++) {
    $resultado = mysqli_fetch_array ($consulta);
    echo "<option value='".$resultado['Proveedor']."'>". $resultado['Proveedor']."</option>";
}
echo "</select>";
echo "&nbsp;&nbsp;<input type='submit' name='enviar' value='Enviar consulta'></p>";
echo "</form>";
// Cerrar conexión
mysqli_close ($conexion);
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>