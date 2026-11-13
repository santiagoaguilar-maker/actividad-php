<?php

$numero = (int) $_GET["numero"];

$contador = 0;

echo "Números primos encontrados:<br>";

for ($i = 2; $i <= $numero; $i++) {

    $esPrimo = true;

    for ($j = 2; $j < $i; $j++) {

        if ($i % $j == 0) {
            $esPrimo = false;
            break;
        }

    }

    if ($esPrimo == true) {

        echo $i . "<br>";

        $contador++;

    }

}

echo "<br>Total de números primos: " . $contador;

?>