<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejercicio 2. Hoja 4</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<header>
        <h1>ALGORITMO DESGLOSE BILLETES Y MONEDAS</h1>
    </header>
    <section>
        <nav></nav>
        <main>
			<?php
				if ($_REQUEST)
				{
					$cantidad=$_REQUEST['euros'];
					$valor=array(500,200,100,50,20,10,5,2,1);
					echo "<h1>RESULTADO</h1> ";
					echo "Cantidad total de euros pedidos a desglosar es: $cantidad<br><br>";
					for($i=0;$i<sizeof($valor);$i++)
					{
						$unidades=intval($cantidad/$valor[$i]);		//También se puede utilizar la función floor()
						$cantidad=$cantidad%$valor[$i];				//Se almacena en la variable $cantidad el resto de la división para el siguiente paso del bucle
																	//Se podría haber usado el operador '%='  =>  $cantidad %= $valor[$i]
						echo "Nº de unidades de $valor[$i] euros es $unidades <br>";
					}
					echo "<br> <a href='ejer2.php'>Volver a pedir nuevo desglose</a>";
				}
				else
				{
			?>
					<h1>FORMULARIO</h1>
					<form action='ejer2.php' method='GET'>
						Introduce cantidad de euros a desglosar:
						<input type='number' name='euros'  min='1' required/></br></br>
						<input type='submit' value='Enviar'/>
					</form>
			<?php
				}
			?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>
