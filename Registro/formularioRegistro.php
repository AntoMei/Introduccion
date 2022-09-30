<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (sizeof($errores) > 0) {
        foreach ($$errores as $error) {
            echo $error . "<br>";
        }
    }
    ?>
    
<form method="POST" enctype="multipart/form-data">
    Nombre de usuari@ <input type="text" name="nombre"><br><br>
    Correo Electrónico <input type="email" name="correo"><br><br>
    Contraseña <input type="email" name="contraseña"><br><br>
    Confirma la contraseña <input type="email" name="confirmaContraseña"><br><br>
    <input type="submit" value="Registrase">
    <br><br>
    ¿Ya eres miembro? <a href="/home/alumno/Documentos/Introduccion/Registro/loginRegistro.php">Acceso usuari@s</a>
</form>
</body>
</html>

<?php

$errores = [];

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

/*$resultado = $pdo->query("SELECT email FROM users");
while ($registro = $resultado->fetch()) {
    echo "email ".$registro['email'].": ";
}*/

//Datos

$nombre = $_POST['nombre'] ?? "";
$correo = $_POST['correo'] ?? "";
$contraseña = $_POST['contraseña'] ?? "";
$confirmaContraseña = $_POST['confirmaContraseña'] ?? "";

if (strlen($nombre) == 0) {
    $errores[] = "Rellene el campo nombre";
}
if (strlen($email) == 0) {
    $errores[] = "Rellene el campo email";
}
if ($contraseña != $confirmaContraseña) {
    $errores[] = "La contraseña no coincide";
}

if (sizeof($errores) == 0) {
$pdoSt =  $pdp-> prepare('INSERT into users(nombre, correo, contraseña) VALUES (?,?,?)');
$pdoSt->bindParam(1, $nombre);
$pdoSt->bindParam(2, $email);
$pdoSt->bindParam(3, $password);
$pdoSt->execute();
}
?>