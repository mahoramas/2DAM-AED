<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function multiplicaciones(){
        $rutaArchivo = "resources/tabla5.txt";
        $archivo = fopen($rutaArchivo, "w");
        for($i = 1; $i <= 10; $i++){
            $resultado= 5*$i;
            $linea = "5* $i = $resultado \n";
            fwrite($archivo, $linea);
        }

        echo file_get_contents($rutaArchivo);
        fclose($archivo);
    }

    multiplicaciones();

?>