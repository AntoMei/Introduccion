<?php
$temperaturasMes = "25, 35, 40, 45";
$temperaturas = explode(' ',$temperaturasMes);

foreach ($temperaturas as $numero) {
    echo $numero ;
}

$suma = array_sum($temperaturas);
$total_numeros = count($temperaturas);
$media = $suma/$total_numeros;
$mostrar ="<br>";
echo $mostrar;
echo $media;

?>