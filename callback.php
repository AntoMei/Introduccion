<?php
    $cadenas = array("hola que tal", "buenos dias buenas noches", "hola");
    $longitud = array_map("strlen", $cadenas);
    print_r($longitud);
    echo "<br>" . max($longitud) . " "  . min($longitud);
?>