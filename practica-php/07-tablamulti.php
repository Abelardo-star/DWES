<?php
function Multiplicar($numero) {
    echo "Tabla del numero: " . $numero;
    
    for ($i = 1; $i <= 10; $i++) {
        $solucion = $numero * $i;
        echo $numero . " x " . $i . " = " . $solucion . "<br>";
    }
}

function Parametros($principio, $fin) {
    for ($i = $principio; $i <= $fin; $i++) {
        Multiplicar($i);
    }
}
?>