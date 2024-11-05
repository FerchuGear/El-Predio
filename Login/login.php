<?php
// login.php

session_start();
require 'db.php'; // Importa la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar el usuario y obtener el rol
    $sql = "SELECT u.id, u.password, r.rol
            FROM usuarios u
            INNER JOIN roles r ON u.rol_id = r.id
            WHERE u.email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $user = $stmt->fetch();

    // Verifica la contraseña usando password_verify
    if ($user && password_verify($password, $user['password'])) {
        // Login exitoso
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['rol'] = $user['rol'];

        // Redirigir según el rol
        switch ($user['rol']) {
            case 'Administrador':
                header("Location: admin_dashboard.php");
                break;
            case 'Empleado':
                header("Location: empleado_dashboard.php");
                break;
            case 'Cliente':
                header("Location: cliente_dashboard.php");
                break;
            default:
                echo "Rol no reconocido.";
        }
    } else {
        echo "Correo o contraseña incorrectos.";
    }
}
?>
    <!--HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos.css">

    <title>Formulario Login y Registro de Usuarios</title>
</head>
<body>

   <!-- Formularios -->
    <div class="contenedor-formularios">
        <!-- Links de los formularios -->
        <ul class="contenedor-tabs">
            <li class="tab tab-segunda active"><a href="#iniciar-sesion">Iniciar Sesión</a></li>
            <li class="tab tab-primera"><a href="#registrarse">Registrarse</a></li>
        </ul>

        <!-- Contenido de los Formularios -->
        <div class="contenido-tab">
            <!-- Iniciar Sesion -->
            <div id="iniciar-sesion">
                <h1>Iniciar Sesión</h1>
                <form action="#" method="post">
                    <div class="contenedor-input">
                        <label>
                            Usuario <span class="req">*</span>
                        </label>
                        <input type="text" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                            Contraseña <span class="req">*</span>
                        </label>
                        <input type="password" required>
                    </div>
                    <p class="forgot"><a href="#">Se te olvidó la contraseña?</a></p>
                    <input type="submit" class="button button-block" value="Iniciar Sesión">
                </form>
            </div>

   <script src="js/jquery.js"></script>
   <script src="js/main.js"></script>

</body>
</html>
 
</html>
 
