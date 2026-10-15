<?php
// 3.- Imprimir los números del 1 al indicado y luego en orden inverso
require_once __DIR__ . '/../includes/ejercicios.php';

$limite = 0;
if (isset($_POST['limite'])) {
    $limite = (int) $_POST['limite'];
}

$resultado = contarHasta($limite);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Números</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h1>Resultado</h1>

        <p>Del 1 al <?php echo $limite; ?>:</p>
        <p><?php echo implode(" ", $resultado['ida']); ?></p>

        <p>Del <?php echo $limite; ?> al 1:</p>
        <p><?php echo implode(" ", $resultado['vuelta']); ?></p>

        <a href="/pags/numeros.html" class="btn btn-secondary mt-3">Volver</a>
    </div>

</body>
</html>