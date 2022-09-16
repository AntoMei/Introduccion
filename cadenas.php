<?php
$nombre = $_GET['nombre'] ?? 'Antonio';
echo trim($nombre, '/');
?>
<br>
<?php
echo strlen($nombre);
?>
<br>
<?php
echo strtoupper($nombre);
?>
<br>
<?php
echo strtolower(($nombre));
?>
<br>
<?php
$prefijo = $_GET['prefijo'] ?? ' ';
$pos = strpos($nombre, $prefijo);
if ($pos !== false) {
    echo 'Coincide';
};
?>
<br>
<?php
echo substr_count((strtoupper($nombre) . strtolower($nombre)) ,'a');
?>
<br>
<?php
$pos = stripos($nombre, 'a');
if ($pos !== false) {
    echo "La letra 'a' en '$nombre' en la posicio $pos";
};
?>
<br>
<?php
echo str_ireplace('o', 0, $nombre);
?>
<br>
<?php
$url = 'http://username:password@hostname:9090/path?arg=value';
echo parse_url($url, PHP_URL_SCHEME) . '<br>';
echo parse_url($url, PHP_URL_USER) . '<br>';
echo parse_url($url, PHP_URL_PATH) . '<br>';
echo parse_url($url, PHP_URL_QUERY);
?>