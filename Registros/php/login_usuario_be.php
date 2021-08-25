<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $consulta_login = "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'";
    $validar_login = mysqli_query($conexion, $consulta_login);

    if($validar_login) {
        $_SESSION['usuario'] = $correo;
        header("location: ../bienvenida.php");
        exit();
    } else {
        echo '
            <script>
                alert("Usuario no existente, por favor verifique los datos introducidos.");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

?>