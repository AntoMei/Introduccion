<?php
$cadenas = array("Hola", "que", "tal", "estas");
$resultado = [];

for ($i=0; $i < count($cadenas) - 1; $i++) { 

        $elemento1 = array_slice($cadenas, 0, $i+1);
        $elemento2 = array_slice($cadenas, $i+1);

        $elementoFinal = [];
        $elementoFinal[] = implode(" ", $elemento1);
        $elementoFinal[] = implode(" ", $elemento2);
        $resultado[] = $elementoFinal;
    }
print_r($resultado);
?>