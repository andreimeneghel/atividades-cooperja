<?php

    $file = fopen(__DIR__ . "/teste.txt","a");
    fwrite($file,"\nPHP é incrível!");
    fclose($file);

    

?>