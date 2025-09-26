<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function leerJSON(){
        $rutaArchivo = "resources/datos.json";
        $archivo = fopen($rutaArchivo, "r");

        $datosJson = file_get_contents($rutaArchivo);
        $datos = json_decode($datosJson);
        fclose($archivo);
        print_r(value: $datos);
    }

    leerJSON();
?>