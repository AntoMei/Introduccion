<?php
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){

    $numeros = array (134,43,542,5432,6745);

    for ($i=0; $i < $upper; $i++) {
        $upper = chr(rand(65, 90));
    }

    for ($i=0; $i < $lower; $i++) { 
        $lower = chr(rand(65, 90));
    }

    for ($i=0; $i < $numeric; $i++) { 
        $numeric = chr(rand(65, 90));
    }

    for ($i=0; $i < $other; $i++) { 
        $other = chr(rand(65, 90));
    }
}
?>