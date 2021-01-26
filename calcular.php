<?php

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$tipo = $_GET['tipo'];

switch($tipo)
{
 case 'Somar': $resultado = $valor1 + $valor2; break;
 case 'Subtrair': $resultado = $valor1 - $valor2; break;
 case 'Multiplicar': $resultado = $valor1 * $valor2; break;
 case 'Dividir': $resultado = $valor1 / $valor2; break;
}


echo "O resultado é "; echo $resultado;

?>