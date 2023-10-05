<?php

function ordenamientoInsercion($lista){

    $contador = count($lista);
    for($i=1; $i<$contador; $i++){
        $valorActual = $lista[$i];
        $j = $i-1;
        while($j>=0 && $lista[$j] > $valorActual){
            $lista[$j+1] = $lista[$j];
            $j--;
        } 
        $lista[$j+1] = $valorActual;
    }
    return $lista;
}

$milista = [4, 1, 2, 36, 5, 7, 10];

$listaOrdenada = ordenamientoInsercion($milista);

echo "Lista ordenada " . implode(", ", $listaOrdenada);

?>