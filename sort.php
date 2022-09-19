<?php
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

asort($edades);
foreach ($edades as $key => $val) {
    echo "$key = $val\n" . "<br>";
}

$mostrar ="<br>";
echo $mostrar;

ksort($edades);
foreach ($edades as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
$mostrar ="<br>";
echo $mostrar;

arsort($edades);
foreach ($edades as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
$mostrar ="<br>";
echo $mostrar;

krsort($edades);
foreach ($edades as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
?>