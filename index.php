<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supabase Connection Test</title>
</head>
<body>
    <h1>Checking Supabase Connection...</h1>
    <p id="connectionStatus">Connecting...</p>

    <!-- Link to the JS file -->
    <script src="testConnection.js"></script>
</body>
</html>
=======
<?php
require 'public/assets/php/menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/Isologo.png">
    <link rel="stylesheet" href="public/css/index.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjtej8Tdhc0L67tElF9Uv2Xxe28m_DDDE&callback=initMap"
        defer></script>
    <title>El Predio</title>
</head>

<body>
    <!-- Slider principal!-->

    <div id="inicio" class="slider">
        <div class="slider--inner">
            <img src="public/assets/img/cancha.webp" alt="Imagen 1">
            <img src="public/assets/img/cancha2.webp" alt="Imagen 2">
            <img src="public/assets/img/cancha3.webp" alt="Imagen 3">
        </div>
        <div class="slider-content">
            <h1>Las Mejores Canchas!</h1>
            <h4>Consultar la disponibilidad ahora</h4>
            <button data-label="Reservá" onclick="redirectWithDelay()"
                onclick="location.href='public/screens/reservas.php'">Reserva Online</button>
        </div>
    </div>
    <script src="public/js/carrusel.js"></script>

    <!-- Introduccion !-->

    <div id="introduccion" class="intro">
        <img class="intro-main-image" src="public/assets/img/introduccion.webp">
        <div class="intro-content">
            <H1>El Predio</H1>
            <H4>El complejo deportivo, "El Predio", es una instalacion de tamaño reducido que ofrece espacios para el
                alquiler de canchas y eventos deportivos</H4>
            <div class="icono-cancha-container">
                <a href="public/screens/reservas.php"><img class="icono-cancha"
                        src="public/assets/img/iconos/cancha-icono.webp"></a>
                <span>Sistema de Reserva Online</span>
            </div>
        </div>
    </div>


    <!-- Sobre nosotros!-->

    <section id="about-us" class="about-us">
        <div class="display" style="background-image: url('public/assets/img/img4.webp');">
            <div class="about-text">
                <h2>Sobre Nosotros 1</h2>
                <p>Texto descriptivo del primer tema...</p>
            </div>
            <img src="public\assets\img\img4.webp" alt="Imagen asociada">
        </div>

        <div class="display" style="background-image: url('public/assets/img/img5.webp');">
            <img src="public/assets/img/img5.webp" alt="Imagen asociada">
            <div class="about-text">
                <h2>Valores y Misión</h2>
                <p>Texto descriptivo del segundo tema...</p>
            </div>
        </div>

        <div class="display" style="background-image: url('public/assets/img/img6.webp');">
            <div class="about-text">
                <h2>Propósito</h2>
                <p>Texto descriptivo del tercer tema...</p>
            </div>
            <img src="public/assets/img/img6.webp" alt="Imagen asociada">
        </div>
    </section>

    <div class="image-container">
        <div class="image-item">
            <div class="image-text">14 OFICINAS</div>
            <img src="public/assets/img/img7.webp" alt="Imagen 1">
        </div>
        <div class="image-item">
            <div class="image-text">MÁS DE 100 EMPLEADOS</div>
            <img src="public/assets/img/img8.webp" alt="Imagen 2">
        </div>
        <div class="image-item">
            <div class="image-text">MÁS DE 100.000 CLIENTES</div>
            <img src="public/assets/img/img9.webp" alt="Imagen 3">
        </div>
    </div>

    <!-- Seccion de Mapa !-->
    <section id="map">
        <div class="map-container">
            <!-- Texto de ubicación superpuesto en la parte superior -->
            <div class="location-text">📍 Ubicación: Directorio y L. de la Torre - Mataderos</div>

            <!-- Div contenedor del mapa -->
            <div id="mapa-leaflet"></div>
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
            <style>
            #map {
                height: 800px;
                width: 100%;
            }
            </style>
            <!-- Contenedor de información superpuesto en la parte inferior -->
            <div class="info-container">
                <div class="info-item">
                    <img src="public\assets\img\iconos/img20.webp" alt="Paradas" class="info-icon">
                    <h3>Paradas cercanas</h3>
                    <p>Varias líneas de colectivo te dejan a pasos de la cancha</p>
                    <small>Varias líneas te acercan: 180, 92, 126, 63, 50, 55</small>
                </div>
                <div class="info-item">
                    <img src="public\assets\img\iconos/img31.webp" alt="Dirección" class="info-icon">
                    <h3>Dirección</h3>
                    <p>Directorio y L. de la Torre, Mataderos. ¡Te esperamos!</p>
                </div>
                <div class="info-item">
                    <img src="public\assets\img\iconos/img32.webp" alt="Estaciones" class="info-icon">
                    <h3>Estaciones cercanas</h3>
                    <p>Tu centro de canchas, servicios y todo lo necesario para disfrutar del deporte.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cosas random !-->

    <div class="custom-stats-container">
        <div class="stat-item">
            <div class="circle" style="border-color: #4CAF50;">
                <img src="public/assets/img/img16.webp" alt="Chilenas">
            </div>
            <p class="number" style="color: #4CAF50;">15</p>
            <p class="label">CHILENAS</p>
        </div>
        <div class="stat-item">
            <div class="circle" style="border-color: #F44336;">
                <img src="public\assets\img\img16.webp" alt="Tarjetas">
            </div>
            <p class="number" style="color: #F44336;">45</p>
            <p class="label">TARJETAS</p>
        </div>
        <div class="stat-item">
            <div class="circle" style="border-color: #FF9800;">
                <img src="public/assets/img/img18.webp" alt="Tacos">
            </div>
            <p class="number" style="color: #FF9800;">30</p>
            <p class="label">TACOS</p>
        </div>
        <div class="stat-item">
            <div class="circle" style="border-color: #2196F3;">
                <img src="public/assets/img/img19.webp" alt="Goles">
            </div>
            <p class="number" style="color: #2196F3;">90</p>
            <p class="label">GOLES</p>
        </div>
    </div>
</body>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script src="public/js/index.js"></script>
<script src="public/js/mapa.js"></script>
<script src="public/js/chilenas.js"></script>

</html>
<?php
require 'public/assets/php/footer.php';
?>
>>>>>>> c6596b4 (Todo (o casi) lo de frontend)
