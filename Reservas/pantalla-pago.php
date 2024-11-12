<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Tarjeta</title>
    <link rel="stylesheet" href="pantalla-pago.css">
</head>
<body>
<header>
    <!-- Logo de la empresa -->
    <div class="logo">
        <img src="../assets/img/Isologo.png" alt="Logo de la Empresa">
        <link rel="icon" type="image/x-icon" href="../assets/img/Isologo.ico">
    </div>

    <!--FALTA INCLUIR LOS BOTONES PARA PANTALLAS PEQUEÑAS--->
    
    <!-- Enlaces de navegación -->
    <section class="section-links" id="menuLinks">
        <a href="#"><h3>Inicio</h3></a>
        <a href="#"><h3>Reservas</h3></a>
        <a href="#"><h3>Instalación</h3></a>
        <a href="#"><h3>Contacto</h3></a>
        <a href="#"><h3>Políticas de Privacidad</h3></a>
        <a href="#"><h3>Merch</h3></a> 
    </section>

<script>
    function toggleMenu() {
        const menuLinks = document.getElementById('menuLinks');
        menuLinks.classList.toggle('active'); // Agrega o quita la clase active para mostrar/ocultar el menú
    }
</script>
</header>

    <main>
        <h1>Nueva tarjeta</h1>
        <div class="tarjeta-container">
            <div class="tarjeta">
                <!-- Imagen de tarjeta, puedes agregar una imagen aquí si deseas -->
                <div class="tarjeta-dibujo"></div>
                <label>Número de tarjeta</label>
                <input type="text" placeholder="Número de tarjeta">
            </div>
            <div class="botones">
                <button onclick="volver()">Anterior</button>
                <button onclick="siguiente()">Siguiente</button>
            </div>
        </div>
    </main>

    <script>
        function volver() {
            window.history.back();
        }

        function siguiente() {
            // Aquí debes definir la redirección a la próxima pantalla.
            // Por ejemplo, si es la página de confirmación de la reserva:
            window.location.href = "/PROYECTO%20FINAL%20-%20FRONTEND/Reservas/agradecimiento.php";
        }
    </script>
</body>
</html>