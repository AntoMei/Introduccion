<?php
$html = "<ul>";
$color = array('blanco', 'verde', 'rojo');
foreach ($color as $key => $value) {
    $html.="<li>".$value."</li>";
}
$html.= "</ul>";
echo $html;
?>