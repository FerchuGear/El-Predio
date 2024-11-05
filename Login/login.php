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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos.css">

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">

 

    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Email" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" autocomplete="off" required>
        </div>
        <div class="forgot">
            <section>
                <input type="checkbox" id="check">
                <label for="check">Recuerdame</label>
            </section>
            <section>
                <a href="#">Olvidé mi contraseña</a>
            </section>
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Registrarse</label>
        </div>
        <div class="sign-up-link">
            <p>¿No tienes una cuenta? <a href="#">Iniciar Sesión</a></p>
        </div>
    </div>
</body>
</html>
