<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Reserva</title>
    <link rel="stylesheet" href="datos.css">
</head>
<body>
    <header>
        <!-- Aquí iría el código de tu header -->
    </header>
    <main>
        <div class="info-container">
            <h1>INFORMACIÓN DE LA RESERVA</h1>
            <div class="form-container">
                <div class="user-info">
                    <h2>Usuario</h2>
                    <input type="text" placeholder="Nombre y Apellido">
                    <input type="email" placeholder="Email">
                    <input type="tel" placeholder="Teléfono">
                </div>
                <div class="event-info">
                    <h2>Evento</h2>
                    <input type="text" placeholder="Nombre del evento">
                    <input type="text" placeholder="Fecha" id="fecha">
                    <input type="text" placeholder="Hora/turno" id="turno">
                    <input type="text" placeholder="Cancha">
                </div>
            </div>
            <button class="modify-btn">Modificar Evento</button>
            <div class="social-buttons">
                <button class="social-btn">Promocionar evento</button>
            </div>
        </div>
    </main>
</body>
</html>