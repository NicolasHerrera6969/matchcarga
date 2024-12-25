<?php

include 'conexion_be.php';

if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    // VERIFICAR SI EL CORREO YA ESTÁ REGISTRADO
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM user WHERE email = '$email'");
    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '
        <script>
            alert("Este correo ya está registrado, intenta con otro diferente");
            window.location = "../login.php";
        </script>
        ';
        exit();
    }

    // VERIFICAR SI EL NOMBRE DE USUARIO YA ESTÁ REGISTRADO
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '
        <script>
            alert("Este nombre de usuario ya está registrado, intenta con otro diferente");
            window.location = "../login.php";
        </script>
        ';
        exit();
    }

    // INSERTAR USUARIO EN LA BASE DE DATOS
    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    $ejecutar = mysqli_query($conexion, $query);

    // ALERTA DE USUARIO CREADO CORRECTAMENTE O NO
    if ($ejecutar) {
        echo '
        <script>
            alert("Usuario creado correctamente");
            window.location = "../login.php";
        </script>
        ';
    } else {
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no creado");
            window.location = "../login.php";
        </script>
        ';
    }

    mysqli_close($conexion);
} else {
    echo '
    <script>
        alert("Por favor complete todos los campos");
        window.location = "../login.php";
    </script>
    ';
}

?>