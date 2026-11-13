<?php

$preguntas = [
    "¿Utiliza internet todos los días?",
    "¿Utiliza redes sociales frecuentemente?",
    "¿Considera útil la tecnología?",
    "¿Utiliza herramientas digitales para estudiar?",
    "¿Utiliza aplicaciones móviles?",
    "¿La tecnología facilita su comunicación?",
    "¿Utiliza internet para investigar?",
    "¿Considera importante aprender tecnología?",
    "¿Utiliza dispositivos electrónicos diariamente?",
    "¿Está satisfecho con los avances tecnológicos?"
];

if (isset($_POST["respuestas"])) {

    $respuestas = $_POST["respuestas"];

    $suma = 0;
    $contador = 0;

    foreach ($respuestas as $persona) {

        foreach ($persona as $respuesta) {

            $suma += (int)$respuesta;

            $contador++;

        }

    }

    $promedio = $suma / $contador;

    echo "<h1>Resultados de la encuesta</h1>";

    echo "Personas encuestadas: " .
         count($respuestas) . "<br>";

    echo "Total de respuestas: " . $contador . "<br>";

    echo "Suma de respuestas: " . $suma . "<br>";

    echo "Promedio general: " . round($promedio, 2);

} else {

    $encuestados = (int)$_POST["encuestados"];

    echo "<h1>Encuesta sobre tecnología</h1>";

    echo '<form method="POST" action="encuesta.php">';

    echo '<input type="hidden" name="encuestados"
          value="' . $encuestados . '">';

    for ($i = 1; $i <= $encuestados; $i++) {

        echo "<h2>Encuestado número $i</h2>";

        foreach ($preguntas as $indice => $pregunta) {

            echo "<p>" . ($indice + 1) . ". " .
                 $pregunta . "</p>";

            echo '<select name="respuestas[' .
                 $i . '][' . $indice . ']" required>';

            echo '<option value="">Seleccione</option>';

            for ($nota = 1; $nota <= 5; $nota++) {

                echo '<option value="' . $nota . '">' .
                     $nota . '</option>';

            }

            echo '</select><br><br>';

        }

    }

    echo '<button type="submit">Enviar encuesta</button>';

    echo '</form>';

}

?>