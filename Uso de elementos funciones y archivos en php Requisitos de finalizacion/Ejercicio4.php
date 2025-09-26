<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */

    function mostrarNombres(){
    $arrayNombres = ["Ana", "Luis", "Marta", "Carlos", "Julia"];
    $file = fopen("resources/nombres.txt", "w");
    for ($i = 0; $i <= sizeof($arrayNombres)-1; $i++){
        fwrite($file, "$arrayNombres[$i] \n");
    }
    fclose($file);        
    echo file_get_contents("resources/nombres.txt");
    }
    mostrarNombres();
?>