<?php
if (isset($_POST['edad'])) 
    {
    $edad = $_POST['edad'];

    try 
        {
        if (!is_numeric($edad)) 
            {
            throw new Exception("Error: Debes introducir un número, no letras.");
            }
        $edad = (int)$edad;
        if ($edad < 0) 
            {
            throw new Exception("Error: La edad no puede ser un número negativo.");
            }
        if ($edad > 130) 
            {
            throw new Exception("Error: La edad no puede ser mayor a 130 años.");
            }
        if ($edad >= 18) 
            {
            echo "Eres mayor de edad.";
            }
            else 
                {
                echo "Eres menor de edad.";
                }
        } 
        catch (Exception $excepcion) 
            {
            echo $excepcion->getMessage();
            }
} 
else 
    {
    echo "Faltan datos.";
    }
?>