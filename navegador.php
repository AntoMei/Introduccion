<?php

    $navigator = ($_SERVER['HTTP_USER_AGENT']);

    if (strpos($navigator, 'Firefox') === FALSE) {
        echo "Por favor entra con el navegador de Mozilla";
    }

?>

<!doctype html>

<html lang="es">

<head>

<meta charset="utf-8">

<title></title>

<meta name="author" content="Víctor Ponz">

</head>    

<body>

<ul>
    <li><a href='idioma.php?setLanguage=es'>Español</a></li>

    <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>

</ul>


</body>

</html>