<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function invertirFrase(){
    $rutaArchivo = "resources/frase.txt";
    $rutaArchivoReverso = "resources/frase_invertida.txt";
    
    $archivo = fopen($rutaArchivo, "w");
    fwrite($archivo, "Hola PHP");
    $frase = file_get_contents($rutaArchivo);
    $fraseInversa = strrev($frase);
    file_put_contents($rutaArchivoReverso, $fraseInversa);
    echo "Inversion hecha \n";
    fclose($archivo);
    }
    invertirFrase();
?>