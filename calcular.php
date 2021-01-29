<?php

header ('Content-type: text/html; charset=UTF-8');

require_once 'pdoconfig.php';

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$tipo = $_GET['tipo']; 
$resultado = $_GET['resultado'];

switch($tipo)
{
 case 'Somar': $tipo = "Soma"; $resultado = $valor1 + $valor2; break;
 case 'Subtrair': $tipo = "Subtração"; $resultado = $valor1 - $valor2; break;
 case 'Multiplicar': $tipo = "Multiplicação"; $resultado = $valor1 * $valor2; break;
 case 'Dividir': $tipo = "Divisão"; $resultado = $valor1 / $valor2; break;
}
/*
print($tipo);
die();
*/
$stmt = $conn->prepare("INSERT INTO tabuada (`valor1`, `valor2`, `operacao`, `resultado`) VALUES(:valor1, :valor2, :tipo, :resultado)");
$stmt->bindParam(':valor1', $valor1);
$stmt->bindParam(':valor2', $valor2);
$stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
$stmt->bindParam(':resultado', $resultado);
$stmt->execute();

echo "<br>O resultado da "; echo $tipo; echo " entre "; echo $valor1; echo " e "; echo $valor2; echo " é "; echo $resultado

?>