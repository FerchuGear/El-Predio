<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/Isologo.png">

    <style>
        /* Estilos básicos para el body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Evita el desplazamiento horizontal */
        }

        /* Estilos para el header */
        header {
            background-color: rgb(70, 69, 64);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Botón para abrir el menú */
        .open-btn {
            font-size: 20px;
            cursor: pointer;
            background-color: rgb(70, 69, 64);
            color: white;
            padding: 10px 15px;
            border: none;
            z-index: 1; /* Asegura que el botón esté encima del menú */
        }

        /* Estilos para el menú lateral */
        nav {
            height: calc(100% - 60px); /* Resta la altura del header */
            width: 0; /* Inicialmente cerrado */
            position: fixed;
            top: 60px; /* Debajo del header */
            left: 0;
            background-color: rgb(70, 69, 64);
            overflow-x: hidden;
            transition: width 0.3s; /* Animación suave al abrir */
            padding-top: 20px; /* Espacio superior dentro del menú */
            white-space: nowrap; /* Previene el quiebre de línea de los textos */
        }

        /* Estilos para los enlaces dentro del menú */
        nav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: opacity 0.3s; /* Animación suave para el texto */
            opacity: 0; /* Invisible por defecto */
            white-space: nowrap;
        }

        /* Al abrir el menú, hacemos visibles los enlaces */
        nav.open a {
            opacity: 1;
        }

        /* Estilos para el hover de los enlaces */
        nav a:hover {
            background-color: #575757;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        
        <button class="open-btn" id="menuButton" onclick="openNav()">☰ Menú</button>
    </header>

    <!-- Menú lateral -->
    <nav id="mySidenav">
        <a href="javascript:void(0)" onclick="closeNav()">Cerrar &times;</a>
        <a href="#">Registro de Compras</a>
        <a href="#">Reservas</a>
        <a href="#">Usuarios</a>
        <a href="#">Opción 4</a>
        <a href="#">Opción 5</a>
    </nav>

    <script>
        /* Función para abrir el menú */
        function openNav() {
            const sidenav = document.getElementById("mySidenav");
            const menuButton = document.getElementById("menuButton");
            sidenav.style.width = "250px";
            sidenav.classList.add("open"); // Agrega clase para mostrar enlaces
            menuButton.style.display = "none"; // Oculta el botón al abrir el menú
        }

        /* Función para cerrar el menú */
        function closeNav() {
            const sidenav = document.getElementById("mySidenav");
            const menuButton = document.getElementById("menuButton");
            sidenav.style.width = "0";
            sidenav.classList.remove("open"); // Elimina clase para ocultar enlaces
            menuButton.style.display = "block"; // Muestra el botón al cerrar el menú
        }
    </script>

</body>
</html>
