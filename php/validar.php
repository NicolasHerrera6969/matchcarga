<?php

session_start();

include 'conexion_be.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $validar_login = mysqli_query($conexion, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['username'] = $username;
        echo '
        <script>
            alert("Bienvenido ' . $username . '");
            window.location = "../inicio.php";
        </script>
        ';
        exit();
    } else {
        echo '
        <script>
            alert("Usuario no encontrado, por favor verifique sus datos");
            window.location = "../login.php";
        </script>
        ';
        exit();
    }
} else {
    echo '
    <script>
        alert("Por favor complete todos los campos");
        window.location = "../login.php";
    </script>
    ';
    exit();
}

?>