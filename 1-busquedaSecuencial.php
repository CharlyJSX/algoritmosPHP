<?php

function busquedaSecuencial($lista, $elemento){
    $longitud = count($lista);
    for($i = 0; $i < $longitud; $i++){
        if($lista[$i] == $elemento){
            return $i;
        }
    }
    return -1;
}

$milista = [10, 4, 3, 5, 8, 1, 7];
$elementoABuscar = 5;
$resultado = busquedaSecuencial($milista, $elementoABuscar);

if($resultado != -1){
    echo "El elemento " . $elementoABuscar . " se encontró en la posición " . $resultado;
}else{
    echo "El elemento " . $elementoABuscar . " no se encontró en la lista";
}

?>