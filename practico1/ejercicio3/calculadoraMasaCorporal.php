<?php

$altura = $_POST["altura"];
$peso = $_POST["peso"];

if (isset($altura, $peso)) {
    $imc = $peso / pow($altura, 2);

    echo "IMC: $imc </br>";

    if ($imc < 18.5)
        echo "Bajo peso";
    elseif (($imc >= 18.5) && ($imc <= 24.99)) {
        echo "Normal";
    } elseif (($imc >= 25) && ($imc <= 29.99)) {
        echo "Sobrepeso";
    } elseif ($imc >= 30) {
        echo "Obecidad";
    }
    
}