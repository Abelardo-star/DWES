<?php
$nombre = '';
$modalidad = '';
$plazasTexto = '';
$plazas = null;
$errores = [];
$enviado = false;
$modalidades = ['presencial', 'online'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreEntrada = $_POST['nombre'] ?? '';
    if (!is_string($nombreEntrada)) {
        $errores[] = 'El nombre debe llegar como texto.';
    } else {
        $nombre = trim($nombreEntrada);
        if ($nombre === '') {
            $errores[] = 'Escribe un nombre.';
        }
    }

    $modalidadEntrada = $_POST['modalidad'] ?? '';
    if (!in_array($modalidadEntrada, $modalidades, true)) {
        $errores[] = 'Selecciona una modalidad válida.';
    } else {
        $modalidad = $modalidadEntrada;
    }

    $plazasTexto = $_POST['plazas'] ?? '';
    if ($plazasTexto === '') {
        $errores[] = 'Indica el número de plazas.';
    } else {
        $plazas = filter_var($plazasTexto, FILTER_VALIDATE_INT);
        if ($plazas === false || $plazas < 1 || $plazas > 4) {
            $errores[] = 'El número de plazas debe estar entre 1 y 4.';
        }
    }

    if (empty($errores)) {
        $enviado = true;
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Formulario inicial de inscripción</title>
</head>
<body>
    <h1>Inscripción a un taller</h1>
    <p>Este primer paso procesa y valida los datos enviados.</p>

    <?php if ($enviado): ?>
        <p style="color: green;">¡Datos recibidos correctamente para el usuario <strong><?php echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?></strong>!</p>
    <?php elseif (!empty($errores)): ?>
        <ul style="color: red;">
            <?php foreach ($errores as $error): ?>
                <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="07-inscripcion-inicio.php" method="post">
        <p>
            <label for="nombre">Nombre ficticio</label>
            <input id="nombre" name="nombre" type="text" value="<?php echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?>" required>
        </p>
        <p>
            <label for="modalidad">Modalidad</label>
            <select id="modalidad" name="modalidad">
                <option value="presencial" <?php echo ($modalidad === 'presencial') ? 'selected' : ''; ?>>Presencial</option>
                <option value="online" <?php echo ($modalidad === 'online') ? 'selected' : ''; ?>>Online</option>
            </select>
        </p>
        <p>
            <label for="plazas">Número de plazas (1–4)</label>
            <input id="plazas" name="plazas" type="number" min="1" max="4" value="<?php echo htmlspecialchars($plazasTexto, ENT_QUOTES, 'UTF-8'); ?>" required>
        </p>
        <button type="submit">Preparar inscripción</button>
    </form>
</body>
</html>