<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "Bienvenido ".$_SESSION['username'];
    } else {
        header("location:login.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="php/cerrar_sesion.php">cerrar sesion</a>
</body>
</html>