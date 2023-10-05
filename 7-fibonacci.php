<?php

function fibonacci($numero){

    $fibonacciArreglo=[];

    if($numero<1){
        return $fibonacciArreglo;
    }
    $fibonacciArreglo[0] = 0;

    if($numero > 1){
        $fibonacciArreglo[1] = 1;
    }
    for($i = 2; $i < $numero; $i++){
        $fibonacciArreglo[$i] = $fibonacciArreglo[$i - 1] + $fibonacciArreglo[$i- 2];
    }
return $fibonacciArreglo;
}

$numero = 10;
$secuencia = fibonacci($numero);
echo "Secuencia de Fibonacci de " . $numero . " términos: " . implode(", ", $secuencia);

?>