<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function copiarArchivo(){
    $rutaArchivo = "resources/origen.txt";
    $rutaCopia = "resources/copia.txt";
    
    $archivo = fopen($rutaArchivo, "w");
    fwrite($archivo, "Este es el archivo original");
    $archivoCopia = fopen($rutaCopia, "w");

    copy($rutaArchivo, $rutaCopia);
    echo "Copia hecha \n";

    fclose($archivo);
    fclose($archivoCopia);
    }
    copiarArchivo();
?>