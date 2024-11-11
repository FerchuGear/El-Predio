<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        header {
            background-color: rgb(70, 69, 64); /* Color de fondo */
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            flex-wrap: wrap; /* Permite que los elementos se envuelvan */
            margin-top:-10px;
            margin-left:-10px;
            margin-right:-8px;
        }

        /* Estilo para el logo */
        .logo img {
            height: 50px; /* Ajusta la altura del logo */
            width: auto;
        }

        /* Estilo para el contenedor de enlaces */
        .section-links {
            display: flex;
            gap: 20px; /* Espacio entre enlaces */
            flex-wrap: wrap; /* Permite que los enlaces se envuelvan */
        }

        /* Estilo para los enlaces */
        .section-links a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin: 5px; /* Espacio alrededor de los enlaces */
        }

        /* Estilo para el hover de los enlaces */
        .section-links a:hover {
            color: #ccc; /* Cambia el color al pasar el cursor */
        }

        /* Estilos responsivos */
        @media (max-width: 800px) {
            header {
                flex-direction: column; /* Cambia la dirección a columna en pantallas pequeñas */
                align-items: center; /* Alinea el logo y los enlaces al centro */
            }

            .section-links {
                justify-content: center; /* Centra los enlaces en pantallas pequeñas */
                width: 100%; /* Hace que los enlaces ocupen el 100% del ancho */
                padding: 10px 0; /* Espaciado vertical */
            }

            .section-links a {
                font-size: 16px; /* Reduce el tamaño de fuente en pantallas pequeñas */
                margin: 5px 0; /* Ajusta el margen */
            }
        }

        @media (max-width: 500px) {
            .section-links a {
                font-size: 14px; /* Reduce aún más el tamaño de fuente en pantallas muy pequeñas */
            }
        }

        /* Estilo adicional para hacer que el header sea más amigable en móviles */
        .hamburger {
            display: none; /* Oculta el botón de menú por defecto */
            flex-direction: column;
            cursor: pointer;
            margin-left: auto;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 4px;
            transition: 0.3s;
        }

        @media (max-width: 800px) {
            .hamburger {
                display: flex; /* Muestra el botón de menú en pantallas pequeñas */
            }

            .section-links {
                display: none; /* Oculta los enlaces por defecto */
                flex-direction: column; /* Apila los enlaces verticalmente */
                width: 100%;
            }

            .section-links.active {
                display: flex; /* Muestra los enlaces cuando están activos */
            }
        }
            .fontMenu{
                font-family: "Comfortaa";
            }
    </style>
</head>
<body>

<header class="fontMenu">
    <!-- Logo de la empresa -->
    <div class="logo">
        <img src="assets/img/Isologo.png" alt="Logo de la Empresa">
        <link rel="icon" type="image/x-icon" href="../assets/img/Isologo.ico">
    </div>
    
    <!-- Botón de menú para pantallas pequeñas -->
    <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
    
    <!-- Enlaces de navegación -->
    <section class="section-links" id="menuLinks">
        <a href="#"><h3>Inicio</h3></a>
        <a href="#"><h3>Reservas</h3></a>
        <a href="#"><h3>Instalación</h3></a>
        <a href="#"><h3>Contacto</h3></a>
        <a href="#"><h3>Políticas de Privacidad</h3></a>
        <a href="#"><h3>Merch</h3></a>
    </section>
</header>

<script>
    function toggleMenu() {
        const menuLinks = document.getElementById('menuLinks');
        menuLinks.classList.toggle('active'); // Agrega o quita la clase active para mostrar/ocultar el menú
    }
</script>

</body>
</html>
