<?php 
  require '../../public/assets/php/menu.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/css/reservas.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Canchas</title>
</head>

<body>


<script>
    function toggleMenu() {
        const menuLinks = document.getElementById('menuLinks');
        menuLinks.classList.toggle('active'); // Agrega o quita la clase active para mostrar/ocultar el menú
    }
</script>

    
  <main>
    <section class="container">
      <div class="selector-cancha">
        <label for="cancha">Seleccionar Cancha</label>
        <select id="cancha">
          <option value="futbol5">Futbol 5 - Cancha 1</option>
          <option value="futbol5">Futbol 5 - Cancha 2</option>
          <option value="futbol5">Futbol 5 - Cancha 3</option>
          <option value="futbol5">Futbol 5 - Cancha 4</option>
          <option value="futbol5">Padel - Cancha 1</option>
          <option value="futbol5">Padel - Cancha 2</option>
          <!-- Puedes agregar más opciones aquí -->
        </select>
      </div>

      <h1 class="title">RESERVAR</h1>


      <div class="horario">
        <button class="arrow">&lt;</button>
        <p class="fecha">Hoy 22/10</p>
        <button class="arrow">&gt;</button>
      </div>
 

      <div class="horas">
        <!-- Horas de reserva -->
        <div class="time-block" id="hora-09-00">09:00</div>
        <div class="time-block" id="hora-10-00">10:00</div>
        <div class="time-block" id="hora-11-00">11:00</div>
        <div class="time-block" id="hora-12-00">12:00</div>
        <div class="time-block" id="hora-13-00">13:00</div>
        <div class="time-block" id="hora-14-00">14:00</div>
        <div class="time-block" id="hora-15-00">15:00</div>
        <div class="time-block" id="hora-16-00">16:00</div>
        <div class="time-block" id="hora-17-00">17:00</div>
        <div class="time-block" id="hora-18-00">18:00</div>
        <div class="time-block" id="hora-19-00">19:00</div>
        <div class="time-block" id="hora-20-00">20:00</div>
        <div class="time-block" id="hora-21-00">21:00</div>
      </div>
<!-----
      <div class="popup-reserva">
        <p>Cancha: FUTBOL</p>
        <p>15:00</p>
        <p>60 min - $10,000</p>
        <button class="confirmar">Confirmar - $10,000</button>
      </div>
--->
<div class="info-box">
    <p>Cancha: FUTBOL</p>
    <p>15:00 hs</p>
    <p>60 min - $10,000</p>
    <button class="confirm-button">Confirmar - $10,000</button>
</div>

      <div class="ubicacion">
        <h2>UBICACIÓN</h2>
        <p>Entre Directorio y Lisandro de la Torre - Mataderos</p>
      </div>

      <div class="horarios">
        <h2>HORARIOS DEL CLUB</h2>
        <p>Lunes, Martes 12:00 a 22:00 pm</p>
        <p>Miércoles, Jueves, Viernes 12:00 a 22:00 pm</p>
        <p>Sábado, Domingo 9:00 a 20:00 pm</p>
      </div>

      <div class="servicios">
        <h2>SERVICIOS DEL CLUB</h2>
        <div class="servicio">
          <p>Wi-Fi</p>
        </div>
        <div class="servicio">
          <p>Vestuarios y Baños</p>
        </div>
        <div class="servicio">
          <p>Buffet</p>
        </div>
        <div class="servicio">
          <p>Eventos</p>
        </div>
      </div>

      <button class="eliminar">ELIMINAR EVENTO</button>
    </section>
  </main>
  <script src="../js/horasSeleccionables.js"></script>
  <script src="../js/reservas.js"></script>
</body>
</html>

<?php 
  require '../assets/php/footer.php';
?>