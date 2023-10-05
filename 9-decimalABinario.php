<?php

function decimalABinario($numeroDecimal){
    if($numeroDecimal == 0){
        return "0";
    }
    $binario = "";
    while($numeroDecimal > 0){
        $bit = $numeroDecimal %2;
        $binario = $bit.$binario;
        $numeroDecimal = floor($numeroDecimal/2);
    }
return $binario;
}

$numeroDecimal = 13;

$numeroBinario = decimalABinario($numeroDecimal);
echo "El número decimal: " . $numeroDecimal . " en binario es: " . $numeroBinario;

?>