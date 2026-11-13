<?php

echo "<h1>Tabla del 4 utilizando FOR</h1>";

for ($i = 1; $i <= 10; $i += 2) {

    echo "4 x " . $i . " = " . (4 * $i) . "<br>";

}

echo "<hr>";

echo "<h1>Tabla del 4 utilizando WHILE</h1>";

$i = 1;

while ($i <= 10) {

    echo "4 x " . $i . " = " . (4 * $i) . "<br>";

    $i++;

}

?>