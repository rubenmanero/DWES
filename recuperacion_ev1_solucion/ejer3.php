<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Recuperación. Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>COMUNIDADES AUTÓNOMAS</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    $conexion=mysqli_connect("localhost","root","") or die ("Error al conectar con el servidor.");
    mysqli_select_db($conexion, "geografia") or die ("Error al conectar con la base de datos.");

    if(!$_REQUEST) {
        $sql="SELECT nombre FROM comunidades ORDER BY nombre";
        $consulta=mysqli_query($conexion,$sql) or die ("Fallo al realizar la consulta.");

        echo "<form action='ejer3.php' method='get'>
            Elige una Comunidad Autónoma:&nbsp;&nbsp;&nbsp;
            <select name='comunidad'>
        ";

        for($i=0;$i<mysqli_num_rows($consulta);$i++) {
            $row=mysqli_fetch_row($consulta);
            echo "<option value='".$row[0]."'>".$row[0]."</option>";
        }
        echo "</select>&nbsp;&nbsp;&nbsp;
            <input type='submit' value='Consultar datos'>
        </form>";
    } else {
        $comunidad=$_REQUEST["comunidad"];
        $sql1="SELECT id_comunidad, id_capital, max_provincias FROM comunidades WHERE nombre='$comunidad'";
        $consulta1=mysqli_query($conexion,$sql1);
        $row1=mysqli_fetch_row($consulta1);

        $sql2="SELECT nombre FROM localidades WHERE id_localidad='".$row1[1]."'";
        $consulta2=mysqli_query($conexion,$sql2);
        $row2=mysqli_fetch_row($consulta2);

        echo "<p>La capital de $comunidad es <b>".$row2[0]."</b>.</p><br>";

        $sql3="SELECT nombre FROM provincias WHERE id_comunidad='".$row1[0]."'";
        $consulta3=mysqli_query($conexion,$sql3);

        echo "<p>Esta comunidad tiene <b>".$row1[2]."</b> provincias: ";
        for($i=0;$i<mysqli_num_rows($consulta3)-2;$i++) {
            $row3=mysqli_fetch_row($consulta3);
            echo $row3[0].", ";
        }

        if(mysqli_num_rows($consulta3) > 1) {
            $row3 = mysqli_fetch_row($consulta3);
            print $row3[0] . " y ";
        }
        if(mysqli_num_rows($consulta3) > 0) {
            $row3 = mysqli_fetch_row($consulta3);
            print $row3[0] . ".</p><br>";
        }

        $sql4="SELECT n_provincia, nombre, superficie, id_capital FROM provincias WHERE id_comunidad='".$row1[0]."'";
        $consulta4=mysqli_query($conexion,$sql4);

        for($i=0;$i<mysqli_num_rows($consulta4);$i++) {
            $row4=mysqli_fetch_row($consulta4);
            echo "<p><b>".$row4[1]."</b> tiene una superficie total de <b>".$row4[2]." km<sup>2</sup></b>, su capital es ";

            $sql5="SELECT nombre FROM localidades WHERE id_localidad='".$row4[3]."'";
            $consulta5=mysqli_query($conexion,$sql5);
            $row5=mysqli_fetch_row($consulta5);

            echo "<b>".$row5[0]."</b> y cuenta con un total de ";

            $sql6="SELECT count(*) FROM localidades WHERE n_provincia='".$row4[0]."'";
            $consulta6=mysqli_query($conexion,$sql6);
            $row6=mysqli_fetch_row($consulta6);

            echo "<b>".$row6[0]."</b> localidades.</p>";
        }
        echo "<br><a href='ejer3.php'>Elegir otra Comunidad Autónoma</a>";
    }
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>