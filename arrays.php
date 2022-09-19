<?php
$nombres = array("1." => 'Antonio', "3." => 'Stefan', "2." => 'Borja');
echo count($nombres) . "<br>";

echo implode(' ', $nombres) . "<br>";

$ordenar = $nombres;
asort($ordenar);
foreach ($ordenar as $key => $val) {
    echo "$key = $val\n" . "<br>";
}

$reversed = array_reverse($nombres);
print_r($reversed);
?>
<br>
<?php
$clave = array_search('Antonio', $nombres);
echo $clave;

$alumnos = array(
    array(
        'id' => 1,
        'nombre' => 'Antonio',
        'edad' => '22',
    ),
    array(
        'id' => 2,
        'nombre' => 'Stefan',
        'apellido' => '20',
    ),
    array(
        'id' => 3,
        'nombre' => 'Borja',
        'apellido' => '19',
    ),
);

$mostrar = '<table border="1">';
foreach ($alumnos as $key) {
    $mostrar.='<tr>';
    foreach ($key as $b) {
        $mostrar .= '<td>'.$b.'</td>';
    }
    $mostrar .= '</tr>';
}
$mostrar .= '</table>';
echo $mostrar;
?>
<br>
<?php
$columnas = array_column($alumnos, 'nombre');
print_r($columnas);
?>
<br>
<?php
$numeros = array(1,2,3,4,5,6,7,8,9,10);
echo array_sum($numeros);
?>