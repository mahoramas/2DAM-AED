<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */
    function simulador(){
        $tweets = fopen("resources/tweets.txt", "a");
        do{
            $datetime = date_format(date_create(), "Y-m-d H:i");
            $tweet = readline("Escribe tu tweet (Enter vacío para salir): ");
            if (strlen($tweet) > 0) {
                fwrite($tweets, "[$datetime] @usuario: $tweet\n");
            }
        }while ($tweet);
        echo implode(file("resources/tweets.txt"));
        fclose($tweets);
    }
    simulador();
?>