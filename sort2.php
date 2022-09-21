<?php
$temperaturas = "34 40.2 22.4 12 35.6 14 15 16";
$temperaturasDelMes = explode(" ", $temperaturas);

$media = array_sum($temperaturasDelMes) / count($temperaturasDelMes);

$temperaturaAsc = $temperaturasDelMes;
asort($temperaturaAsc);

$temperaturaDesc = $temperaturasDelMes;
arsort($temperaturaDesc);

echo("Todas las temperaturas: ");
foreach($temperaturasDelMes as $temperatura){
    echo "$temperatura ";
}

echo "<br> Temperaturas maximas: ";
print_r(array_slice($temperaturaDesc, 0, 5));

echo "<br> Temperaturas minimas: ";
for($i=0; $i < 5; $i++){
    echo "$temperaturaAsc[$i] ";
}

echo "<br>Temperatura media de los meses: $media <br>";
?>