<?php

function celsiusAFahrenheit($celsius){
    $fahrenheit = ($celsius * 9 / 5) + 32;
    return $fahrenheit;
}
function fahrenheitACelsius($fahrenheit){
    $celsius = ($fahrenheit - 32) * 5 / 9;
    return $celsius;
}

$celsius = 25;
$fahrenheit = celsiusAFahrenheit($celsius);
echo $celsius . " °C es igual a " . $fahrenheit . " °F <br>";

$fahrenheit = 77;
$celsius = fahrenheitACelsius($fahrenheit);
echo $fahrenheit . " °F es igual a " . $celsius . " °C <br>";

?>