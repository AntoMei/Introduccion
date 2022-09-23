<?php
$cadenas = array("Hola", "que", "tal", "estas");

for ($i=0; $i < count($cadenas); $i++) { 
        $elemento1 = array_slice($cadenas, 0, $i);

        echo implode($elemento1);
        echo "<br>";;
    }
?>