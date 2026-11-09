<?php
if (isset($_POST['limite'])) 
    {
    $limite = (int)$_POST['limite'];

    $ascendente = "";
    for ($i = 1; $i <= $limite; $i++) { $ascendente .= $i . " "; }
    
    $descendente = "";
    for ($i = $limite; $i >= 1; $i--) { $descendente .= $i . " "; }

    echo "<strong>Ascendente:</strong> " . $ascendente . "<br>";
    echo "<strong>Descendente:</strong> " . $descendente . "<br>";
    } 
    else {
        echo "Formato incorrecto.";
        }
?>