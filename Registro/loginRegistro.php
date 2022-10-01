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

    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    if (strlen($nombre) == 0) {
        $errores[] = "Introduzca un usuario por favor";
        # code...
    }
    if (strlen($contraseña) == 0) {
        $errores[] = "Introduzca la contraseña por favor";
    }
    if(sizeof($errores) == 0){
        $usuario = $pdo->query("SELECT username, email FROM users WHERE username = '$nombre' and password = '$contraseña'");
        
        $usuario->execute();
    }
    if ($registro = $usuario->fetch()){
            echo "Logueado";
    }else{
        $errores[] = "El usuario o contraseña no coinciden, vuelva a intentarlo";
    }

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
    Contraseña: <input type="text" name="contraseña"><br><br>
    <input type="submit" value="Acceder">
    <br><br>
    ¿Todavía no eres miembro? <a href="./formularioRegistro.php">Registrarse</a>
</form>
<?php
        if (sizeof($errores) > 0 ){
            foreach ($errores as $error){
                echo $error . "<br>";
            }
        }
    ?>
</body>
</html>