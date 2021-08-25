<?php 

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena); // Encriptado

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
              VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    // Verifica que el correo no se repita en la base de datos
    $consulta_correo = "SELECT FROM usuarios WHERE correo = '$correo'";
    $verifica_correo = mysqli_query($conexion, $consulta_correo);

    if($verifica_correo) {
        echo '
            <script>
                alert("Este correo ya esta registrado, intente con otro.");
                window.location = "../index.php";
            </script>
        ';
        exit(); // corta todo el codigo de abajo, deja de ejecutar
    }

    // Verifica que el nombre de usuario no se repita en la base de datos
    $consulta_usuario = "SELECT FROM usuarios WHERE usuario = '$usuario'";
    $verifica_usuario = mysqli_query($conexion, $consulta_usuario);

    if($verifica_usuario) {
        echo '
            <script>
                alert("Este nombre de usuario ya esta registrado, intente con otro.);
                window.location = "../index.php";
            </script>
        ';
        exit(); // corta todo el codigo de abajo, deja de ejecutar
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar) {
        echo '
            <script>
                alert("Usuario almacenado correctamente");
                window.location = "../index.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Intentelo de nuevo, usuario no almacenado");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>