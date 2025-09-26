<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    function historiasLocas(){
        $plantilla = file_get_contents("resources/plantilla.txt");

    $animales = file("resources/animales.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $lugares  = file("resources/lugares.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $comidas  = file("resources/comidas.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $plantilla = str_replace("[animal]", $animales[array_rand($animales)], $plantilla);

    $plantilla = str_replace("[lugar]", $lugares[array_rand($lugares)], $plantilla);

    $plantilla = str_replace("[comida]", $comidas[array_rand($comidas)], $plantilla);

    echo $plantilla . "\n";
    }
    historiasLocas();
?>