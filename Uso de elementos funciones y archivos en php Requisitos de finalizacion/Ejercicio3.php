<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function contadorPalabras(){
    file_put_contents("resources/texto.txt", "PHP es muy divertido y potente");
    $palabras = file_get_contents("resources/texto.txt");
    echo str_word_count($palabras);
    }
    contadorPalabras();
?>