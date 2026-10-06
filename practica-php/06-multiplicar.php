<?php

function Multplicar($numero){
    echo "Tabla del numero : " . $numero;

    for ($i=0; $i < 10 ; $i++) { 
        $solucion = $numero * $i;
        echo $numero . " x " . $i . " = " . $solucion . "<br>";
    }
}


?>