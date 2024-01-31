<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Hoja 9. Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>CALCULADORA RACIONALES</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    require_once("Racional.php");

    //Pruebas de métodos definidos en la clase Racional
    // $n1 = new Racional(2,4);
    // $n2= new Racional(1,3);

    // $suma = $n1->sumarRacional($n2);
    // $resta = $n1->restarRacional(new Racional(3));
    // $producto = $n1->multiplicarRacional(new Racional(1,2));
    // $division = $n1->dividirRacional(new Racional("5/7"));

    // $sumaSimplificada = $suma->simplificarRacional();
    // $restaSimplificada = $resta->simplificarRacional();
    // $productoSimplificado = $producto->simplificarRacional();
    // $divisionSimplificada = $division->simplificarRacional();

    // echo "<h3>Racionales: $n1 y $n2</h3>;    //Se ejecuta el método __toString() implícitamente
    // echo "<p>Suma: $suma</p>
    //     <p>Resta: $resta</p>
    //     <p>Producto: $producto</p>
    //     <p>División: $division</p>
    //     <br>
    //     <p>Suma simplificada: $sumaSimplificada</p>
    //     <p>Resta simplificada: $restaSimplificada</p>
    //     <p>Producto simplificado: $productoSimplificado</p>
    //     <p>División simplificada: $divisionSimplificada</p>
    // ";
?>
            <div class="horizontal">
                <div class="vertical">
                    <fieldset class="redondeado">
                        <legend><b>Reglas de uso de la calculadora</b></legend>
                        <ul>
                            <li>La calculadora se usa escribiendo la operación completa.</li>
                            <li>La operación será <b>Operando_1</b> <b>operación</b> <b>Operando_2</b>.</li>
                            <li>Cada operando puede ser un número <i>positivo</i> <b>entero</b> o <b>racional</b>.</li>
                            <li>Los operadores racionales permitidos son <span class="azul">+</span> <span class="azul">-</span> <span class="azul">*</span> <span class="azul">:</span></li>
                            <li>No se deben dejar espacios en blanco entre operandos y operación.</li>
                            <li>Ejemplos:</li>
                            <ul>
                                <li>5+4</li>
                                <li>5/2:2</li>
                                <li>1/4*2/3</li>
                                <li>2/7:1/3</li>
                            </ul>
                        </ul>
                    </fieldset>
                </div>
                <div class="vertical">
                    <fieldset class="redondeado">
                        <legend><b>Establece la operación</b></legend>
                        <form action="ejer3.php" method="get">
                            Operación:
                            <input type="text" name="operacion" size="10">
                            <input type="submit" value="Calcular">
                        </form>
<?php
    if($_REQUEST){
        $string = $_REQUEST["operacion"];
        if(str_contains($string,"+")){
            $datos = explode("+",$string);
            if(str_contains($datos[0], "/")) {
                $n1 = new Racional($datos[0]);
            } else {
                $operando = intval($datos[0]);
                $n1 = new Racional($operando);
            }
            if(str_contains($datos[1], "/")) {
                $n2 = new Racional($datos[1]);
            } else {
                $operando = intval($datos[1]);
                $n2 = new Racional($operando);
            }
            $op = "+";
            $result = $n1->sumarRacional($n2);
            $simple = $result->simplificarRacional();
        } elseif (str_contains($string,"-")){
            $datos = explode("-",$string);
            if(str_contains($datos[0], "/")) {
                $n1 = new Racional($datos[0]);
            } else {
                $operando = intval($datos[0]);
                $n1 = new Racional($operando);
            }
            if(str_contains($datos[1], "/")) {
                $n2 = new Racional($datos[1]);
            } else {
                $operando = intval($datos[1]);
                $n2 = new Racional($operando);
            }
            $op = "-";
            $result = $n1->restarRacional($n2);
            $simple = $result->simplificarRacional();
        } elseif (str_contains($string,"*")){
            $datos = explode("*",$string);
            if(str_contains($datos[0], "/")) {
                $n1 = new Racional($datos[0]);
            } else {
                $operando = intval($datos[0]);
                $n1 = new Racional($operando);
            }
            if(str_contains($datos[1], "/")) {
                $n2 = new Racional($datos[1]);
            } else {
                $operando = intval($datos[1]);
                $n2 = new Racional($operando);
            }
            $op = "*";
            $result = $n1->multiplicarRacional($n2);
            $simple = $result->simplificarRacional();
        } elseif (str_contains($string,":")){
            $datos = explode(":",$string);
            if(str_contains($datos[0], "/")) {
                $n1 = new Racional($datos[0]);
            } else {
                $operando = intval($datos[0]);
                $n1 = new Racional($operando);
            }
            if(str_contains($datos[1], "/")) {
                $n2 = new Racional($datos[1]);
            } else {
                $operando = intval($datos[1]);
                $n2 = new Racional($operando);
            }
            $op = ":";
            $result = $n1->dividirRacional($n2);
            $simple = $result->simplificarRacional();
        }
        echo "<br><p class='azul'>$string = $result</p>";
    }
?>
                    </fieldset>
                    <br>
                    <fieldset class="redondeado">
                        <legend><b>Resultado</b></legend>
<?php
    if($_REQUEST){
        echo "<table class='bordes'>
            <tr class='calculadora'>
                <th class='bordes'>Concepto</th><th class='bordes'>Valores</th>
            </tr>
            <tr>
                <td class='bordes'><b>Operando 1</b></td class='bordes'><td class='bordes centrado'>{$n1}</td>
            </tr>
            <tr>
                <td class='bordes'><b>Operando 2</b></td><td class='bordes centrado'>{$n2}</td>
            </tr>
            <tr>
                <td class='bordes'><b>Operación</b></td><td class='bordes centrado'>{$op}</td>
            </tr>
            <tr>
                <td class='bordes'><b>Resultado</b></td><td class='bordes centrado'>{$result}</td>
            </tr>
            <tr>
                <td class='bordes'><b>Resultado simplificado</b></td><td class='bordes centrado'>{$simple}</td>
            </tr>";
        echo "</table>";
    }
?>
                    </fieldset>
                </div>
            </div>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>