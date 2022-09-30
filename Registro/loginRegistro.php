<?php
$errores = [];
if (sizeof($_POST) != 0) {
    # code...


    $opciones = array(

    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",

    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

    PDO::ATTR_PERSISTENT => true

    );

    $pdo = new PDO(

    'mysql:host=localhost;dbname=users;charset=utf8',

    'root',

    'sa',

    $opciones);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form method="POST" enctype="multipart/form-data">
    Nombre de usuari@ <input type="text" name="nombre"><br><br>
    Contraseña: <input type="email" name="email"><br><br>
    <input type="submit" value="Acceder">
    <br><br>
    ¿Todavía no eres miembro? <a href="">Registrarse</a>
</form>
</body>
</html>