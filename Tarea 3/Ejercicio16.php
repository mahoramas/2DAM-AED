<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    function adivinanza(){
        $palabras = file("resources/palabras.txt");
        $random = array_rand($palabras);
        $adivina = $palabras[$random];

        $adivinaArray = str_split($adivina);
        $tamanio = sizeof($adivinaArray);

        $pos1 = rand(0, $tamanio -1);
        do {
            $pos2 = rand(0, $tamanio -1);
        } while ($pos2 == $pos1);

        $oculta = "";
        for ($i = 0; $i < $tamanio-1; $i++) {
        if ($i == $pos1 || $i == $pos2) {
            $oculta .= $adivinaArray[$i];
        } else {
            $oculta .= "_";
        }
    }

    $intento = readline("Adivina la palabra: $oculta\n ");
    $input = trim($intento);

    if (strtolower($input) == trim(strtolower($adivina))) {
        echo "Correcto\n";
    } else {
        echo "Incorrecto. La palabra era: $adivina\n";
    }
    }
    adivinanza();
?>