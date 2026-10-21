<?php
    $numeros = [];

    for ($i = 0, $i < 10; $i++){
        $numeros[$i] = rand(1,30);
    }
    for ($i = 0, $i < 10; $i++){
        echo "Posicion" . $i . ": " . $numeros[$i] . "<br>";
    }

    $suma = 0
     for ($i = 0, $i < 10; $i++){
        $suma =$suma + $valores[$i];

     }
        $media = $suma / count($valores);

    echo "El valor medio es: ".$media;


?>