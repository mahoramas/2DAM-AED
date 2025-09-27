<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function diario($entrada){
        $rutaArchivo = "resources/diario.txt";
        $archivo = fopen($rutaArchivo, "a");

        $fechaActual = date('[Y-m-d H:i:s]');
        $entradaFormato = "$fechaActual $entrada \n";

        fwrite($archivo, "$entradaFormato");

        echo file_get_contents($rutaArchivo);
        fclose($archivo);
   }

   diario("Hola mundo, soy un programador");
?>