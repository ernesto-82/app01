<?php
// FUNCIONES BASICAS RELATIVAS A LOS EJERCICIOS

// SUMA \\
function suma($a, $b)
{
    return $a + $b;
}

// RESTA \\
function resta($a, $b)
{
    return $a - $b;
}

// MULTIPLICACION \\
function mult($a, $b)
{
    return $a * $b;
}

// DIVISION \\
function div($a, $b)
{
    if ($b == 0) {
        return "No se puede dividir por 0";
    }
    return $a / $b;
}

// COMPRUEBA SI ES MAYOR DE 18 \\
function esMayorDeEdad($edad)
{
    if ($edad >= 18) {
        return true;
    } else {
        return false;
    }
}

// DEVUELVE DOS ARRAYS, DEL 1 AL NUMERO Y DEL NUMERO AL 1 \\
function contarHasta($limite)
{
    $ida = [];
    for ($i = 1; $i <= $limite; $i++) {
        $ida[] = $i;
    }

    $vuelta = array_reverse($ida);

    return ['ida' => $ida, 'vuelta' => $vuelta];
}