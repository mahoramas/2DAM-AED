<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function enumeracion(){
    $file = fopen("resources/numeros.txt", "w");
    for ($i = 1; $i <= 10; $i++){
        fwrite($file, "$i \n");
    }
    fclose($file);

    echo file_get_contents("resources/numeros.txt");
    }
    enumeracion();
?>