﻿<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
	<title>Ejercicio 3. Hoja 4</title>
=======
	<title>Hoja 4. Ejercicio 3</title>
>>>>>>> c7e9a6205aa08c145ee64e4fb9884d90abfc6e3b
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="estilosimple.css"/>
</head>
<body>
<<<<<<< HEAD
<header>
=======
    <header>
>>>>>>> c7e9a6205aa08c145ee64e4fb9884d90abfc6e3b
        <h1>TEMPERATURA MEDIA DE LA SEMANA</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<<<<<<< HEAD
	<?php
		echo"<h1>RESULTADO</h1>";
		$v=$_REQUEST["v"];		//La variable $v se convierte en un array con los datos almacenados en el array $_REQUEST
								//Otra opcion sería construir el array en PHP con: $v=array($_REQUEST[Lunes],$_REQUEST[Martes],...)
		$suma=0;
		for($i=0;$i<count($v);$i++)
		{
			$suma+=$v[$i];
		}
		$media=$suma/count($v);
		echo "La temperatura media de la semana es: ",round($media,2)," (calculada con bucle for)<br><br>";		//round($variable,2) redondea a dos decimales
		echo "También se puede usar la función array_sum() y dividir por el número de elementos, count() o sizeof().<br> El resultado sigue siendo: ",round(array_sum($v)/count($v),2);
	?>
	</main>
		  <aside></aside>
	  </section>
	  <footer></footer>
=======
			<?php
				echo"<h1>CÁLCULO TEMPERATURA MEDIA</h1>";
				$v=$_REQUEST["v"];		//La variable $v se convierte en un array con los datos almacenados en el array $_REQUEST
										//Otra opcion sería construir el array en PHP con: $v=array($_REQUEST[Lunes],$_REQUEST[Martes],...)
				$suma=0;
				for($i=0;$i<count($v);$i++)
				{
					$suma+=$v[$i];
				}
				$media=$suma/count($v);
				echo "La temperatura media de la semana es: ",round($media,2)," (calculada con bucle for)<br><br>";
					//round($variable,2) redondea a dos decimales
					//También se puede usar printf("%.2f", $variable) en vez de echo o print
				echo "También se puede usar la función array_sum() y dividir por el número de elementos, count() o sizeof().<br><br>
				El resultado sigue siendo: ",round(array_sum($v)/count($v),2);
			?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
>>>>>>> c7e9a6205aa08c145ee64e4fb9884d90abfc6e3b
</body>
</html>