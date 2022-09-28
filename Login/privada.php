<?php
if ($_GET['dejameEntrar'] == 0) {
    header('Location: login.php');
    exit();
}else if ($_GET['dejameEntrar'] == 1) {
    echo "Bienvenido";
}
?>