<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */

    function sumarNumeros(){
    $rutaArchivo = "resources/datos_numericos.txt";
    
    $archivo = fopen($rutaArchivo, "w");
    fwrite($archivo, "10, 20, 30, 40");
    $numeros = file_get_contents($rutaArchivo);
    $arrayNumeros = explode(",", $numeros);
    echo array_sum($arrayNumeros) . "\n";
    fclose($archivo);
    }

    sumarNumeros();
?>