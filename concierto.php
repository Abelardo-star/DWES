<?php
// 1. Datos del evento (cinco variables).
$titulo = '<b>Festival de Jazz & Blues</b>';
$precio = 18.50;
$cantidad = 3;
$aforoRestante = 5;
$esEstudiante = true;

// 2. Función calcular_total con return.
function calcular_total($precio, $cantidad) {
    // Variable local para comprobar el ámbito
    $titulo_local = "Título local";
    return $precio * $cantidad;
}

$total = calcular_total($precio, $cantidad);

// 3. Descuento del 10 % si corresponde (if con llaves).
if ($esEstudiante) {
    $total = $total * 0.90;
}

// 4. Título escapado con htmlspecialchars.
$tituloEscapado = htmlspecialchars($titulo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Ficha del concierto</title>
</head>
<body>
    <!-- título escapado -->
    <h1><?= $tituloEscapado ?></h1>
    
    <!-- precio por entrada, cantidad y total formateado -->
    <p>Precio por entrada: <?= number_format($precio, 2, ',', '.') ?> €</p>
    <p>Entradas solicitadas: <?= $cantidad ?></p>
    <p><strong><?= 'Total: ' . number_format($total, 2, ',', '.') . ' €' ?></strong></p>

    <!-- decisión sobre el aforo con if / endif -->
    <?php if ($aforoRestante >= $cantidad): ?>
        <p>¡Aforo disponible! Quedan suficientes asientos.</p>
    <?php else: ?>
        <p>El aforo no disponible</p>
    <?php endif; ?>

    <!-- párrafo de descuento solo si corresponde -->
    <?php if ($esEstudiante): ?>
        <p><em>Se ha aplicado un descuento del 10 % por ser estudiante.</em></p>
    <?php endif; ?>
</body>
</html>