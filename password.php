<?php
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){

    $numeros = array();
    for ($i=0; $i < $upper; $i++) {
        array_push($numeros, chr(rand(65, 90)));
    }

    for ($i=0; $i < $lower; $i++) { 
        array_push($numeros, chr(rand(97, 122)));
    }

    for ($i=0; $i < $numeric; $i++) { 
        array_push($numeros, chr(rand(48, 57)));
    }

    for ($i=0; $i < $other; $i++) { 
        array_push($numeros, chr(rand(219, 223)));
    }
    
    shuffle($numeros);
    foreach ($numeros as $numero) {
        echo "$numero";
    }
}
rand_Pass();
?>