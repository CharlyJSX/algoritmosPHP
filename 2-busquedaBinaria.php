<?php


function busquedaBinaria($lista, $elemento){
    $izquierda = 0;
    $derecha = count($lista)-1;
    while($izquierda <= $derecha){
        $mitad = floor($izquierda + $derecha)/2;
        if($lista[$mitad] == $elemento){
            return $mitad;
        }
        if($lista[$mitad] < $elemento){
            $izquierda = $mitad + 1;
        }else{
            $derecha = $mitad - 1;
        } 
    }
}

$milista = [10, 4, 3, 5, 8, 1, 7];
$elementoABuscar = 5;
$resultado = busquedaBinaria($milista, $elementoABuscar);

echo "La lista: ";
echo "<br>";
print_r($milista);
echo "<br>";

if($resultado != -1){
    echo "El elemento " . $elementoABuscar . " se encontró en la posición " . $resultado;
}else{
    echo "El elemento " . $elementoABuscar . " no se encontró en la lista";
}

?>