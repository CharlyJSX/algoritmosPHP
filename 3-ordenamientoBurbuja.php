<?php

function ordenamientoBurbuja($lista){

    $cantidad = count($lista);
    $cambios = true;

    while($cambios){
        $cambios = false;

        for($i=0; $i<$cantidad-1; $i++){
            if($lista[$i] > $lista[$i+1]){
                $temp = $lista[$i];
                $lista[$i] = $lista[$i+1];
                $lista[$i+1] = $temp;
                $cambios = true;
            }
        }
    }
    return $lista;
}

$milista = [5, 4, 3, 1, 6, 2];

$listaOrdenada = ordenamientoBurbuja($milista);

echo "Lista ordenada " . implode(", ", $listaOrdenada);

?>