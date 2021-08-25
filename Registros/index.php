<?php

    session_start();
    
    if(isset($_SESSION['usuario'])) {
        header("location: bienvenida.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login y Registro</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>
        <main>
            <div class="contenedor__todo">
                <!-- Contenedor Trasero de Login y de Registro -->
                <div class="caja__trasera">
                    <!-- Contenedor Trasero de Login -->
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>
                            Inicia sesión para entrar a la pagina
                        </p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <!-- Contenedor Trasero de Registro -->
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>
                            Registrate para poder iniciar sesión
                        </p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>
                </div>
                <!-- Formulario de Login y Registro -->
                <div class="contenedor__login-register">
                    <!-- Login -->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Iniciar Sesion</button>
                    </form>
                    <!-- Registro -->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
         </main>
         <script src="js/script.js"></script>
    </body>

</html>