<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function registrarEntrada(){
        $arrayNombres = ["Ana", "Pedro", "Lucia"];
        $rutaArchivo = "resources/usuarios.txt";
        $archivo = fopen($rutaArchivo, "w");
        for ($i = 0; $i <= sizeof($arrayNombres)-1; $i++){
        fwrite($archivo, "$arrayNombres[$i] \n");
        }

        echo file_get_contents($rutaArchivo);
        fclose($archivo);
    }

    registrarEntrada();
?>