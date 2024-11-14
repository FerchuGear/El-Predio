<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="compra.css">
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
        <h1>Ya casi terminamos!</h1>
        <div class="container">
            <div class="left-section">
                <h2>Futbol</h2>
                <h3>EL PREDIO</h3>
                <p>📍 Directorio y L. de la Torre</p>
                <p>📅 Fecha: Mié. 22/10/2024</p>
                <p>⏰ Turno: 15:00 - 16:00</p>
                <p>🏟️ Cancha 1 - Futbol</p>
                <p>💰 Precio: $10.000</p>
                <button id="editar-reserva">Editar</button>

            </div>
            <div class="right-section">
                <input type="text" placeholder="Nombre y Apellido">
                <input type="email" placeholder="Email">
                <input type="tel" placeholder="Teléfono">
                <input type="text" placeholder="Nombre del evento">
                <hr>
                <p>Elegir metodo de Pago Online</p>
                <label><input type="radio" name="payment" checked> Visa Crédito</label>
                <label><input type="radio" name="payment"> Visa Débito</label>
                <label><input type="radio" name="payment"> Efectivo (en sucursal)</label>
                <button onclick="irAPantallaPago()">Confirmar</button>
            </main>
            <script>
                function irAPantallaPago() {
                    window.location.href = "pantalla-pago.php";
                }
            </script>
            </div>
        </div>
    </main>
    <script src="compra.js"></script>
</body>
</html>