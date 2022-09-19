<?php
$color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
$html = "<ul>";
$color = array('blanco', 'verde', 'rojo');
foreach ($color as $key => $value) {
    $html.="<li> <a href='$value.html'>".$value."</li>";
}
$html.= "</ul>";
echo $html;
?>