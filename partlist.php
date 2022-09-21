<?php
$cadenas = array("Hola", "que", "tal", "estas");

for ($i=0; $i < count($cadenas); $i++) { 
    for ($j=0; $j < count($cadenas); $j++) { 
        $elemento1 = array_slice($cadenas, 0, $i);
        $elemento2 = array_slice($cadenas, $i, $j);

        print_r($elemento1);
        echo "<br>";
        print_r($elemento2);
        echo "<br>";
    }
}
?>