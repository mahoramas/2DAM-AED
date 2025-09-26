<?php

    /**
     * @author mahoramas
     * @version 1.0.0
     */

    function chistes(): array{
    $content=explode("\n",file_get_contents("resources/chistes.txt"));
    return $content;
}

function chistesRandomSelect(): string{
    $content=chistes();
    $index=array_rand($content);
    return $content[$index];
}
echo chistesRandomSelect() . "\n";
?>