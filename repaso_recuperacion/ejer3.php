<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Repaso 2. Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>BD JARDINERIA</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    $conexion=mysqli_connect("localhost","root","") or die ("Error al conectar con el servidor.");
    mysqli_select_db($conexion, "jardineria") or die ("Error al conectar con la base de datos.");

    if(!$_REQUEST) {
        $sql="SELECT NombreCliente FROM clientes ORDER BY NombreCliente";
        $consulta=mysqli_query($conexion,$sql) or die ("Fallo al realizar la consulta.");

        echo "<form action='ejer3.php' method='get'>
            Elige un cliente:&nbsp;&nbsp;&nbsp;
            <select name='cliente'>
        ";

        for($i=0;$i<mysqli_num_rows($consulta);$i++) {
            $row=mysqli_fetch_row($consulta);
            echo "<option value='".$row[0]."'>".$row[0]."</option>";
        }
        echo "</select>&nbsp;&nbsp;&nbsp;
            <input type='submit' value='Consultar datos'>
        </form>";
    } else {
        $cliente=$_REQUEST["cliente"];
        $sql1="SELECT Ciudad, Pais, Telefono, NombreContacto, ApellidoContacto, CodigoEmpleadoRepVentas, CodigoCliente FROM clientes WHERE NombreCliente='$cliente'";
        $consulta1=mysqli_query($conexion,$sql1);
        $row1=mysqli_fetch_row($consulta1);

        echo "<p><b>$cliente</b> se encuentra ubicado en <b>".$row1[0]."</b>, <b>".$row1[1]."</b>.</p><br>";
        echo "<p>Teléfono de contacto: <b>".$row1[2]."</b> (<b>".$row1[3]." ".$row1[4]."</b>).</p><br>";

        $sql2="SELECT Nombre, Apellido1, Apellido2, Email, CodigoOficina FROM empleados WHERE CodigoEmpleado='".$row1[5]."'";
        $consulta2=mysqli_query($conexion,$sql2);
        $row2=mysqli_fetch_row($consulta2);

        $sql3="SELECT Ciudad, Pais FROM oficinas WHERE CodigoOficina='".$row2[4]."'";
        $consulta3=mysqli_query($conexion,$sql3);
        $row3=mysqli_fetch_row($consulta3);

        echo "<p>El representante de ventas con el que mantiene contacto es <b>".$row2[0]." ".$row2[1]." ".$row2[2]."</b>, de la oficina situada en <b>".$row3[0]."</b>, <b>".$row3[1]."</b>, y cuyo mail de contacto es <b>".$row2[3]."</b>.</p><br>";

        $sql4="SELECT COUNT(*) FROM pedidos WHERE (CodigoCliente='".$row1[6]."') AND (Estado='Pendiente')";
        $consulta4=mysqli_query($conexion,$sql4);
        $row4=mysqli_fetch_row($consulta4);

        if($row4[0]>0){
            echo "<p>Este cliente tiene <b>".$row4[0]."</b> pedidos activos:</p><br>";

            $sql5="SELECT CodigoPedido, FechaPedido, FechaEsperada FROM pedidos WHERE (CodigoCliente='".$row1[6]."') AND (Estado='Pendiente')";
            $consulta5=mysqli_query($conexion,$sql5);

            echo "<table>
                <tr>
                    <th>Código</th><th>Fecha de pedido</th><th>Fecha de entrega</th><th>Importe</th>
                </tr>";

            for($i=0;$i<mysqli_num_rows($consulta5);$i++) {
                $row5=mysqli_fetch_row($consulta5);
                echo "<tr><td class='centrado'>".$row5[0]."</td><td class='centrado'>".$row5[1]."</td><td class='centrado'>".$row5[2]."</td>";

                $sql6="SELECT sum(PrecioUnidad) FROM detallepedidos WHERE CodigoPedido='".$row5[0]."'";
                $consulta6=mysqli_query($conexion,$sql6);
                $row6=mysqli_fetch_row($consulta6);

                echo "<td class='centrado'>".$row6[0]."€</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Este cliente <b>no</b> tiene pedidos activos:<br>";
        }

        echo "<br><a href='ejer3.php'>Consultar otro cliente</a>";
    }
?>
        </main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>