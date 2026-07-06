<?php

function calcularFormula($x,$y){

 if (($x+ $y) == 0){
    return "Não foi possível realizar a divisão por zero!";
 }

 $resultado = ((pow($x,2) + pow($y,2)) / ($x + $y));

 return $resultado;


}

$x = 10;
$y = 5:

$x_usuario = 30;
$y_usuario = 50;

echo "Valor de X é: $x_usuario <br>";
echo "Valor de X é: $y_usuario <br>";
echo "Resultado: " . calcularFormula($x, $y);

?>

