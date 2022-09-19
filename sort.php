<?php
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

echo "Nombre ascendente:" . "<br>";
$ordenadoNomAsc = $edades;
ksort($ordenadoNomAsc);
foreach ($ordenadoNomAsc as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
$mostrar ="<br>";
echo $mostrar;

echo "Edad ascendente:" . "<br>";
$ordenadoEdadAsc = $edades;
asort($ordenadoEdadAsc);
foreach ($ordenadoEdadAsc as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
$mostrar ="<br>";
echo $mostrar;

echo "Nombre desscendente:" . "<br>";
$ordenadoNomDesc = $edades;
krsort($ordenadoNomDesc);
foreach ($ordenadoNomDesc as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
$mostrar ="<br>";
echo $mostrar;

echo "Edad ascendente:" . "<br>";
$ordenadoEdadDesc = $edades;
arsort($ordenadoEdadDesc);
foreach ($ordenadoEdadDesc as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
?>