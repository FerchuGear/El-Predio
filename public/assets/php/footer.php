<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <style>
    /* Fuente para el texto */
    .fontH3 {
      font-family: "Comfortaa", sans-serif;
      font-weight: bold;
      margin: 0;
      text-align: center;
    }

    /* Contenedor principal */
    .contenedor {
      display: flex;
      justify-content: space-between;
      width: 80%; /* Ajusta el ancho según necesites */
      margin: 0 auto;
      background-color: #dba55d;
    }

    /* Contenedor para cada columna de texto y botón */
    .columna {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* Estilo general para los botones */
    .boton {
      background-color: #3b873e;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      font-weight: bold;
      border-radius: 3px;
      border: 2px solid #3b873e;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-family: 'PT Serif', serif;
      margin-top: 10px;
    }

    .boton:hover {
      background-color: #2f6b2f;
    }

    /* Estilos específicos para cada botón */
    .boton-reserva {
      width: 150px;
    }

    .boton-disponibilidad {
      width: 200px;
    }
  </style>
</head>
<body>
  <div class="contenedor">
    <div class="columna">
      <h3 class="fontH3">¡Es tu momento!</h3>
      <button class="boton boton-reserva" name="ReOn" type="button">Reserva Online</button>
    </div>
    <div class="columna">
      <h3 class="fontH3">¡Podés reservar tu cancha ahora!</h3>
      <button class="boton boton-disponibilidad" name="CheDisp" type="button">Chequeá Disponibilidad</button>
    </div>
  </div>
</body>
</html>
