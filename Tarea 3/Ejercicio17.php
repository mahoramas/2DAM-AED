<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    function generador(){
        $adjetivos = file("resources/adjetivos.txt");
        $animales = file("resources/animales.txt");

        $adj = $adjetivos[array_rand($adjetivos)];
        $animal = $animales[array_rand($animales)];

        $combinacion = trim($adj) . " " . trim($animal);
        echo "$combinacion\n";
    }
    generador();
?>