<?php
    // no funciona
    /**
     * @author mahoramas
     * @version 1.0.0
     */
    
    function canciones(){
        $canciones = file("resources/canciones.txt");
        $random = array_rand($canciones);
        echo $canciones[$random] . "\n";
    }
    canciones();
?>