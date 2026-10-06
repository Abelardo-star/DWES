<?php

$numeros = [];

for($i = 0; $i < 10; $i++){
    $numeros[$i] = rand(1,30);
}
for($i = 0; $i < 10; $i++){
    echo " Las temperaturas son: " .$numeros[$i] . "<br>";
}

$media = array_sum($numeros)/count($numeros);
echo "Media de la suma de los numeros es: " . $media . "<br>";

$maximo = max($numeros);
echo "El numero maximo es: " . $maximo . "<br>";

$minimo = min($numeros);
echo "El numero minimo es: " . $minimo . "<br>";


?>