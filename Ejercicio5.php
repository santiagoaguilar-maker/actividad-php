<?php

$numero = $_POST["numero"];

$invertido = strrev((string)$numero);

echo "Número original: " . $numero . "<br>";

echo "Número invertido: " . $invertido;

?>