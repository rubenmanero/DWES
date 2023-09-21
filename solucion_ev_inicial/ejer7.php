<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 7</title>
        <meta charset="utf-8">
    </head>
    <body>
		<table text-align:center; border=1>
		<?php
			$i;
			$j;

			for ($i=1; $i <=10 ; $i++)
			{
				echo "<tr>";
				for ($j=1; $j <=10 ; $j++)
				{
					echo "<td>$i x $j =";
					echo ($i *$j);
					echo "</td>";
				}
				echo "</tr>";
			}
		?>
		</table>
	</body>
</html>