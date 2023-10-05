<?php   

function encontrarMaximoMinimo($lista){
    $contador = count($lista);
    if($contador === 0){ return null; }
    $maximo = $lista[0];
    $minimo = $lista[0];

    for($i=1; $i<$contador; $i++){

        if($lista[$i] > $maximo){
            $maximo = $lista[$i];
        }
        if($lista[$i] < $minimo){
            $minimo = $lista[$i];
        }
    }
    return ["maximo" => $maximo, "minimo"=>$minimo];
}

$milista = [5, 3, 1, 4, 2];
$resultado = encontrarMaximoMinimo($milista);

echo "Varlor máximo: " . $resultado["maximo"] . "<br/>";
echo "Varlor mínimo: " . $resultado["minimo"] . "<br/>";

?>