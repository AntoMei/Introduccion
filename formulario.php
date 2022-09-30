<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form method="POST" enctype="multipart/form-data">
    Nombre: <input type="text" name="nombre"><br><br>
    Correo: <input type="email" name="email"><br><br>
    Estudios:
    <select name="estudios">
        <option value="bachillerato">Bachillerato</option>
        <option value="grado-superior">Grado Superior</option>
        <option value="Universidad">Universidad</option>
    </select>
    <br><br>
    Ubicacion <input type="file" id="imagen" name="imagen">
    <br><br>
    <input type="submit" value="Enviar">
    <br><br>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = 1;
}

$directorioSubida = "./Images/";

$max_file_size = "51200000";

$extensionesValidas = array("jpg", "png", "gif");

if(isset($_POST["submit"]) && isset($_FILES['imagen'])){

    $errores = array();

    $nombreArchivo = $_FILES['imagen']['name'];

    $filesize = $_FILES['imagen']['size'];

    $directorioTemp = $_FILES['imagen']['tmp_name'];

    $tipoArchivo = $_FILES['imagen']['type'];

    $arrayArchivo = pathinfo($nombreArchivo);

    $extension = $arrayArchivo['extension'];

    // Comprobamos la extensión del archivo

    if(!in_array($extension, $extensionesValidas)){

        $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";

    }

    // Comprobamos el tamaño del archivo

    if($filesize > $max_file_size){

        $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";

    }

    // Comprobamos y renombramos el nombre del archivo

    $nombreArchivo = $arrayArchivo['filename'];

    $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);

    $nombreArchivo = $nombreArchivo;

    // Desplazamos el archivo si no hay errores

    if(empty($errores)){

        $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;

        move_uploaded_file($directorioTemp, $nombreCompleto);

    }

}

if(sizeof($_POST) !== 0){
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $estudios = $_POST['estudios'];

    if(sizeof($_FILES) !== 0){
        $ruta = $_FILES['imagen']['name'];
    }

    echo "$nombre <br> $correo <br> $estudios";
    echo "<img src='./Images/$ruta'>";
}

?>