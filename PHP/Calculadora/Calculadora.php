<?php
// 1.- Calculadora
require_once __DIR__ . '/../includes/ejercicios.php';

// GUARDAMOS LOS NUMEROS EN LAS SIGUIENTES VARIABLES \\
$numero1 = 0;
$numero2 = 0;

if (isset($_POST['numero1'])) {
    $numero1 = (int) $_POST['numero1'];
}

if (isset($_POST['numero2'])) {
    $numero2 = (int) $_POST['numero2'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Calculadora</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h1>Resultado</h1>

        <p>Suma: <?php echo suma($numero1, $numero2); ?></p>
        <p>Resta: <?php echo resta($numero1, $numero2); ?></p>
        <p>Multiplicación: <?php echo mult($numero1, $numero2); ?></p>
        <p>División: <?php echo div($numero1, $numero2); ?></p>

        <a href="/pags/calculadora.html" class="btn btn-secondary mt-3">Volver</a>
    </div>

</body>
</html>