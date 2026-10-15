<?php
// 2.- Crea una variable edad y muestra si es mayor de edad o no
require_once __DIR__ . '/../includes/ejercicios.php';

$edad = 0;
if (isset($_POST['edad'])) {
    $edad = (int) $_POST['edad'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Mayoría de edad</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h1>Resultado</h1>

        <p>
            <?php
            if (esMayorDeEdad($edad)) {
                echo "Eres mayor de edad";
            } else {
                echo "Eres menor de edad";
            }
            ?>
        </p>

        <a href="/pags/mayoriaEdad.html" class="btn btn-secondary mt-3">Volver</a>
    </div>

</body>
</html>