<?php

function factorial($numero){

    if($numero < 0){
        return "NO se puede calcular el factorial";
    }elseif($numero == 0 || $numero == 1){
        return 1;
    }else{
        $resultado = 1;
        for($i = 2; $i <= $numero; $i++){
            $resultado*=$i;
        }
        return $resultado;
    }
}

$numero=7;
$factorial = factorial($numero);
echo "El factorial de " . $numero . " es " . $factorial;

?>