<?php
require_once __DIR__ . '/includes/calculadora.php';

if (isset($_POST['num1']) && isset($_POST['num2'])) 
    {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    try {
        $calc = new Calculadora($num1, $num2);
        echo "Suma: " . $calc->sumar() . "<br>";
        echo "Resta: " . $calc->restar() . "<br>";
        echo "Multiplicación: " . $calc->multiplicar() . "<br>";
        echo "División: " . $calc->dividir() . "<br>";
        } 
    catch (Exception $excepcion) 
        {
        echo "Error: " . $excepcion->getMessage();
        }
    }    
    else 
        {
        echo "Faltan datos.";
        }
?>