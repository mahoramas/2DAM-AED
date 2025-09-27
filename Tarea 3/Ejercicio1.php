<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function escribir(){
     file_put_contents("resources/datos.txt", "Hola Mundo desde PHP");
     echo file_get_contents("resources/datos.txt");
    }
    escribir();
?>