<?php
$longitud = array ("Antonio" => "Es muy listo, porque lo aprueba todo",
                   "Pepe" => "No es tan alisto,",
                   "Lucas" => "Lo sabe todo");


function cmp($a,$b){
    if(strlen($a) == strlen($b)) return 0;
    
    return (strlen($a) > strlen($b) ? -1 : 1);
  }

uasort($longitud, "cmp");
print_r($longitud);
?>