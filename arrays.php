<?php
$nombres = array("1." => 'Antonio', "3." => 'Stefan', "2." => 'Borja');
echo count($nombres) . "<br>";

echo implode(' ', $nombres) . "<br>";

asort($nombres);
foreach ($nombres as $key => $val) {
    echo "$key = $val\n" . "<br>";
}

$reversed = array_reverse($nombres);
print_r($reversed);
?>
<br>
<?php
$clave = array_search('Antonio', $nombres);
echo $clave;
?>